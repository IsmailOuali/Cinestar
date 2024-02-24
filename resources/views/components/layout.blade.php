

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>

    <title>CINE STAR</title>
    <style>
      
@keyframes scroll {
	0% {
		transform: translateY(0);
	}
	30% {
		transform: translateY(100px);
	}
}

svg #wheel {
	animation: scroll ease 1.5s infinite;
}


*,
*::before,
*::after {
	box-sizing: border-box;
	-webkit-backface-visibility: hidden;
	-webkit-transform-style: preserve-3d;
}





    </style>
</head>
<body>
    {{ $slot }}
</body>
</html>

