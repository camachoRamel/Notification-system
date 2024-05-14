<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    {{-- <title>{{ $pageTitle}}</title> --}}
</head>

<body class="px-4 bg-light">

    <a href="{{ route('user', ['id' => $user->id]) }}" class="mt-3 btn btn-dark">Go back</i></a>

    @if ($errors->any())
    <div class="alert alert-danger mt-3" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <section class="vh-100 d-flex flex-column justify-content-center align-items-center">

        <div class="col-12 col-md-8 col-lg-4 shadow">
            <div class="card text-center">
                <div class="card-header">
                    <div class="container-fluiid text-center fs-5 fw-bold">Create Task</div>
                </div>
                <form action="{{ route('save.task', ['id' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="card-body text-start">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control datepicker" name="deadline" id="deadline" placeholder="dd/mm/yyyy">
                            <label for="deadline">Deadline:</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="task" id="task" placeholder="test">
                            <label for="task">Task:</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="20" style="height: 100px"></textarea>
                            <label for="message">Message:</label>
                        </div>
                        <div class="form-floating mb-3 d-none">
                            <input type="text" class="form-control" name="user_id" id="user_id" placeholder="test" value="{{ $user->id }}">
                            <label for="user_id">User ID:</label>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="container-fluid text-end">
                            <div class="container-fluid text-end">
                                <button type="submit" class="px-5 btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        {{-- <div class="row mb-3">
            <div class="container-fluiid text-center fs-5 fw-bold">Create Task</div>
        </div>

        <div class="col-12 col-md-8 col-lg-5">
            <form action="" method="POST" class="form px-3 py-5 rounded-3 shadow bg-light">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="receiver" id="receiver" placeholder="test@gmail.com">
                    <label for="receiver">To:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" name="deadline" id="deadline" placeholder="test">
                    <label for="deadline">Deadline:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="task" id="tasj" placeholder="test">
                    <label for="task">Task:</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="20" style="height: 100px"></textarea>
                    <label for="message">Message:</label>
                </div>
                <div class="row">
                    <div class="container-fluid text-center">
                        <button type="submit" class="px-5 btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div> --}}
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                dateFormat: 'dd/mm/yy'
            });
        });

    </script>
</body>

</html>