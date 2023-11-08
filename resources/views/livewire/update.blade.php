<div class="row">
    <form>
        <h3>Updating {{$title}}</h3>
        <input type="hidden" wire:model="post_id">
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">Title:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput2">Description:</label>
            <textarea class="form-control" id="exampleFormControlInput2" wire:model="content" placeholder=""></textarea>
            @error('content') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
    </form>
</div>