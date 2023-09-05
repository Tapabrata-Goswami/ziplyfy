<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Ziplyfy | Short your links</title>
</head>

<body>
    <section>
        <div id="container">
            <form id="link-input">
                <input type="text" id="link" placeholder="Give me a long link.">
                <input id="link-gen-btn" type="submit" value="Short">
            </form>
            <div id="short-link">
                <input type="text" id="short-l" value="" >
                <button id="copy-short-link">Copy</button>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#link-gen-btn").on("click",function(e){
                e.preventDefault();
                var link = $("#link").val();
                $.ajax({
                    type:"POST",
                    url:"includes/link-generator.php",
                    data:{
                        link:link
                    },
                    success:function(data){
                        $("#short-l").val("http://localhost/ziplyfy/?l="+data);
                    }
                });
            });
            $("#copy-short-link").on("click", function(){
                var s_link = $("#short-l");
                s_link.select();
                document.execCommand('copy');
            })
        });
    </script>
</body>

</html>