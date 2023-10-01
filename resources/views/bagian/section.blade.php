<div id="home" class="row g-0  position-relative mt-5 " style="height:100vh">
    <div class="col-md-6 p-5  my-auto ">
          <h1 class="text-white ">
            <div id="text"></div>
          </h1>
        
        <script>
        var i=0,text;
        text = "Wellcome To My WEB...";
        
        
        function ketik() {
          if(i<text.length){
            document.getElementById("text").innerHTML += text.charAt(i);
            i++;
            setTimeout(ketik,80);
          }
        }
        ketik();
        
        </script>
          <h1 class="display-3 text-white" style="font-family:sans-serif;  text-shadow: 3px 2px 1px rgb(41, 37, 37);">I'M SAEPULLOH</h1>
          <h4><p class="card-text text-white">programer web developer.</p></h4>
          <div class="col">
            <span class="hover-zoom">
          </div>
        </div>
        <div class="col-md-6 mb-md-0 p-md-4">
          <img src="{{asset('img/loogo_harimau.png')}}" class="w-100 h-100" alt="...">
        </div>
   </div>
