<section id="d5">
    <h1 class="text-center mt-5">تماس با ما</h1>
    <div class="x"></div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{route('comment.ajax')}}" method="post" id="cancat" class="mt-5 text-center">
                    @csrf
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" id="name" class="form-control border-warning">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" id="email" class="form-control border-warning">
                    </div>
                    <div class="form-group">
                        <label for="com">com</label>
                       <textarea name="com" id="com" class="form-control border-warning" style="resize: none;"></textarea>
                    </div>
                    <input type="submit" value="send" class="btn btn-success form-control mt-4">
                </form>
            </div>
        </div>
    </div>
 </section>
