<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\show_links;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class SaveUrl extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name;
    public $url;

    public function render()
    {
        $showLinks = show_links::where('user_id', Auth::user()->id)->paginate(2);
        return view('livewire.save-url', compact('showLinks'));
    }
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:100',
            'url' => 'required|url',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function save(Request $request) 
    {
        dd($request);
        $this->validate();

        show_links::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'url' => $request->url,
        ]);

        session()->flash('message', 'URL created successfully');
        $this->resetInput();
    }
    public function resetInput(){
        $this->name = '';
        $this->url = '';
    }
    
    public function delete($id){
        $url = show_links::find($id);
        if($url){
            $url->delete();
        }
        session()->flash('message', 'URL delete successfully');
    }
}
