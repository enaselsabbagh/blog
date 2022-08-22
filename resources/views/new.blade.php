<form action="{{route('new.post')}}">
    @csrf
    <input  name="title" type="text" placeholder="Please enter the article title" />
    <textarea name="description" placeholder="Please enter the article description"></textarea>
    <button type="submit">Submit</button>
</form>
