<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>

    <form action="contact" method="POST" class="d-flex flex-column m-auto mt-3 w-50 gap-2 border p-3">
        <h2 class="text-center">Contact with us</h2>
        <input required type="text" class="form-control" name="name" placeholder="enter your name">
        <input required type="email" class="form-control" name="email" placeholder="enter your email">
        <textarea required name="message" cols="30" rows="5" class="form-control"></textarea>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
    <br>

    <div class="d-flex flex-column m-auto mb-5 w-75 gap-2">
        <h5 class="m-0 text-center">Contact Histories</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>From</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($histories as $history)
                    <tr>
                        <td>{{ $history->created_at }}</td>
                        <td>{{ $history->from }}</td>
                        <td>{{ $history->name }}</td>
                        <td>{{ $history->to }}</td>
                        <td>{{ $history->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
