<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vue-Ajax Video 18</title>
</head>
<body>
<h1>Hello</h1>
<div id="root">
  <ul>
    <li v-for="skill in skills">@{{ skill }}</li>
  </ul>

</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="app.js"></script>
</body>
</html>
