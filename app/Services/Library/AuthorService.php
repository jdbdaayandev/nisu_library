<?php

namespace App\Services\Library;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorService
{
    public function getForDataTable(Request $request)
    {
        $query = Author::query();
        
        $totalRecords = $query->count();
        
        // Handle Search
        if ($search = $request->input('search.value')) {
            $query->where('author_name', 'like', "%{$search}%")
                  ->orWhere('bio', 'like', "%{$search}%");
        }
        
        $filteredRecords = $query->count();
        
        // Handle Sorting
        if ($request->has('order')) {
            $orderColumnIndex = $request->input('order.0.column');
            $orderDirection = $request->input('order.0.dir');
            
            $columns = ['id', 'author_name', 'bio', 'id']; 
            $query->orderBy($columns[$orderColumnIndex], $orderDirection);
        }
        
        // Handle Pagination
        $query->skip($request->input('start', 0))
              ->take($request->input('length', 10));
              
        // Format the output
        $data = $query->get()->map(function($type) {
            
            $editBtn = '
                <button 
                    type="button" 
                    class="btn btn-sm btn-info mr-1 btn-edit"
                    data-id="'.$type->id.'"
                    title="Edit">
                    <i class="fas fa-edit"></i>
                </button>';
            
            $deleteBtn = '
                    <button 
                        type="button"
                        class="btn btn-sm btn-danger btn-delete"
                        data-id="'.$type->id.'"
                        data-url="/authors/'.$type->id.'"
                        title="Delete">
                        <i class="fas fa-trash"></i>
                    </button>';

            return [
                'id'           => $type->id,
                'author_name' => '<strong>' . $type->author_name . '</strong>',
                'bio'  => '<span class="text-muted">' . $type->bio . '</span>',
                'actions'      => $editBtn . $deleteBtn
            ];
        });

        // Return array to the controller
        return [
            'draw'            => intval($request->input('draw')),
            'recordsTotal'    => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data'            => $data
        ];
    }

    public function show(int $id)
    {
        $author = Author::find($id);

        return $author;
    }

    public function store(array $data): Author
    {
        return Author::create($data);
    }

    public function update(int $id, array $data): Author
    {
        $author = Author::findOrFail($id);
        $author->update($data);

        return $author;
    }

    public function delete(int $id)
    {
        $author = Author::findOrFail($id);

        $author->delete();

        return $author;
    }
}