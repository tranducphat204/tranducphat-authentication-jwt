<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí Học Sinh</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <form action="/" method="POST">
        @cfrs
        <h5 class="modal-title" id="exampleModalLabel">Chỉnh Sửa Học Sinh</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <input type="text" class="form-control m-2" name="name" id="name" placeholder="{{$student->name}}">
        <input type="text" class="form-control m-2" name="phone" id="phone" placeholder="{{$student->phone}}">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="/">Huỷ</a></button>
        <button type="submit" value="submit" class="btn btn-primary">Lưu</button>
    </form>
</body>

</html>