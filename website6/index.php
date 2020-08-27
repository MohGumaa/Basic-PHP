<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <title>Search User</title>

    <script>
        const showSuggestion = (str) =>{
            if(str.length == 0){
                document.querySelector('#output').innerHTML = '';
            } else {
                // const request = new XMLHttpRequest();
                // request.onload = function () {
                //     document.querySelector('#output').innerHTML = this.responseText;
                //     console.log(this.responseText)
                // }

                // request.open('GET', `http://localhost/phpsandbox/website6/suggest.php?q=${str}`, true);
                // request.send();
                fetch(`http://localhost/phpsandbox/website6/suggest.php?q=${str}`)
                    .then(res => res.json())
                    .then(data => {
                        console.log(data)
                        document.querySelector('#output').innerHTML = data;
                    })
                    .catch(err => console.log(err))
            }
        }
    </script>

</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form action="">
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
    </div>
</body>
</html>
