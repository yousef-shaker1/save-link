<div>
    <div class="form-container">
        <h2>Add Url</h2>
        
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                <strong>{{ session()->get('message') }}</strong>
            </div>
        @endif
        <form action="{{ route('save_url') }}" method="POST">
            @csrf
            <input type="text" name="name" wire:model.live='name' placeholder="Name" required>
            @error('name') <span class="alert alert-danger alert-dismissible fade show mt-2" >{{ $message }}</span> @enderror
            <br><br>
            <input type="url" name="url" wire:model.live='url' placeholder="URL" required>
            <br>
            @error('url') <span class="alert alert-danger alert-dismissible fade show mt-2">{{ $message }}</span> @enderror
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <table id="itemTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($showLinks as $link)
                <tr>
                    <td>{{ $link->name }}</td>
                    <td>
                        <a href="{{ $link->url }}" target="_blank" class="view-button">View</a>
                    </td>
                    <td>
                        <button wire:click="delete({{ $link->id }})" class="delete-button">Delete</button>
                    </td>
                </tr>
            @empty
            <tr>
                <td>not found url save</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $showLinks->links() }} 
</div>
