<div class="row">
    <form>
        <h3>Creating Post</h3>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">Title:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" wire:model="title" value="{{ date('Ymd')}}">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput2">Content:</label>
            <textarea class="form-control" id="exampleFormControlInput2" wire:model="content" placeholder=""></textarea>
            @error('content') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <button wire:click.prevent="store()" class="btn btn-success">Save</button>
    </form>
</div>