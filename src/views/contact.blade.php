

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
    </head>
    <body>
        <!-- your content here... -->
        <h1>Contact Us</h1>
        <form action="{{route('contact')}}" method="post">
			@csrf
            <div class="">
                <input type="text" class="" name="name" placeholder="Your name please">
            </div>
			<div class="">
                <input type="email" class="" name="email" placeholder="Your email please">
			</div>	
			<div class="">
				<textarea name="message" cols="30" rows="10" placeholder="Your query please"></textarea>
            </div>
			<div class="">
				<button type="submit" class="">Submit</button>
			</div>
        </form>
    </body>
</html>

