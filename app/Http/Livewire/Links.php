<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Links extends Component
{
    use WithPagination;

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.links', [
            'links' => Link::whereUserId(Auth::user()->id)->paginate(15),
        ]);
    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        Link::whereId($id)->whereUserId(Auth::user()->id)->delete();
    }
}
