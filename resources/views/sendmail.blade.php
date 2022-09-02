<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>EMAIL APP PROJECT</title>

</head>
<body>
    <div class="container col-md-6 offset-md-3 mt-5">
        <div class="card bg-dark text-light">
            <div class="card-header bg-primary">
                <h1 class="text-center" >SEND MAIL</h1>
            </div>
            <div class="card-body">
                <form action="{{'/send-mail'}}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">Email To</label>
                        <input type="email" name="email" class="form-control">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                            
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control">
                        @error('subject')
                        <p class="text-danger">{{$message}}</p>
                            
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea name="content" cols="5" rows="5" class="form-control"></textarea>
                        @error('content')
                        <p class="text-danger">{{$message}}</p>
                            
                        @enderror
                    </div>

                    <button class="btn btn-primary mt-3"type="submit">Send Now</button>
                </form>
                    </div>
                    @if(Session::has('success'))

                    <div class="alert alert-success">
            
                    {{Session::get('success')}}
            
                </div>
            
            @endif
                </div>     
            </div>
        </div>
    </div>
</body>
<style>
    body{
      background-image: url('https://media.istockphoto.com/photos/abstract-composition-with-connecting-dots-and-lines-futuristic-for-picture-id1341437653?b=1&k=20&m=1341437653&s=170667a&w=0&h=TsUPRBpi8fTDj-HTPD9AqSujWadlti0tZaCu3ue70ic=');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    </style> 
</html>