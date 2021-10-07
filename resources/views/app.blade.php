<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Link Shortener</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script defer src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <section class='main'>
        <div class="container text-center pt-5">
            <h2 class="pt-5 title">Welcome to our brand new <i><b>url shortener!</b></i></h1>
            <div class="form">
                <form action="/short/" method="POST">
                    @csrf
                    <div class="mb-3 pt-5">
                        <label for="exampleFormControlInput1" class="form-label">Paste your url here</label>
                        <input type="text" name='user_url' required class="form-control user_url" id="exampleFormControlInput1" placeholder="https://example.com/folder/hello/">
                    </div>
                    <button class='btn makeShort'><b>Short it!</b></button>
                </form>
            </div>
            <div class="success">
                <h3>Success! Your short url*:</h3>
                <span>{{ env('APP_URL') }}</span><span class="short_url"></span>

                <div class='note'>
                    * Let's imagine that this is link, not text
                </div>
            </div>
        </div>
    </section>
</body>
</html>
