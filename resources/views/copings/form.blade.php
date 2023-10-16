<div>
    <form method="POST" action="{{ route('copings.store') }}">
        @csrf
        <div>
            <textarea name='action'></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary normal-case">entry</button>
    </form>
</div>
