<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        var json = {
            "id" : "test01",
            "name" : "테스트 1번",
            "address" : "부산광역시 센텀중앙로 97 909호"
        }
    
        function sendMemberData () {
            exam.postMessage(JSON.stringify(json));
        }
        
        function fromFlutter(title) {
            document.getElementById("title").innerHTML = title;
        }
        
        function showToastMessage() {
            exam.postMessage('Hi!');
        }
                
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">This is web title </h1>
    <input type="button" value="Send Member Data!" onclick="sendMemberData()" />
    <input type="button" value="Show ToastMessage!" onclick="showToastMessage()">
</body>
</html>