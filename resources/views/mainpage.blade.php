<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Tutor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            textarea {
                resize: none;
            }
            footer p {
                letter-spacing: 1px;
                color: whitesmoke;
            }
            footer .social-icon a {
                margin: 10px;
            }
            .fa {
                padding: 5px;
                font-size: 15px;
                width: 15px;
                text-align: center;
                text-decoration: none;
            }

            .checked {
    color: rgb(233, 131, 233);
  }

  
  .btn {
    background-color: rgb(155, 2, 194);
    border: none;
    color: white;
    padding: 12px 30px;
    cursor: pointer;
    font-size: 20px;
  }

  
  .btn:hover {
    background-color: rgb(218, 89, 218);
  }

  * {
    box-sizing: border-box;
  }

  body {
    font-family: Verdana, sans-serif;
  }

  .mySlides {
    display: none;
  }

  img {
    vertical-align: middle;
  }

 
  .slideshow-container {
    position: relative;
    margin: auto;
  }

 
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

 
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }

  .container {


    position: relative;

  }

  .center {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }


  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px
    }
  }
        </style>
        <link rel="stylesheet" type="text/css" href="/css/mainpage.css">
    </head>

  <script>
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }

 
</script>
    <body>
        @if (session('save'))
            <script>alert("Success");</script>
        @endif
        @if (session('error'))
            <script>alert("Failed");</script>
        @endif
        
        
        <nav class="w3-top">
            <div class="w3-bar w3-black w3-padding w3-card" style="letter-spacing:4px;">
              <a href="{{ url('mainpage') }}" class="w3-bar-item w3-button">My Tutor</a>
              
         
              <div class="w3-right w3-hide-small">
                <a href="{{ route('logout') }}" class="w3-bar-item w3-button">Logout</a>
              </div>
            </div>
        </nav>
        <div class="bgimg w3-display-container ">
        <header class="w3-container w3-theme w3-padding">
  <div class="w3-center">
  <h1 class="w3-xxxlarge w3-animate-bottom w3-padding-top-48">WELCOME TO MY TUTOR</h1>
  <h4> SCHOOL OPPORTUNITIES</h4>
  </div>
  </header>

        <section>
            <div>
            <button class="w3-button w3-black w3-round w3-right w3-margin" onclick="document.getElementById('newsubject').style.display= 'block';return false;">New Subject
            </button>
            </div>
            <br><br>
            <hr>
        </section>

        <!-- Pop out add product modal -->
        <div id="newsubject" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content w3-round" style="width:500px">
                <header class="w3-row w3-black"> <span onclick="document.getElementById('newsubject').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                    <h4 class="w3-margin-left">New Subject Form</h4>
                </header>
                
                <div class="w3-padding">
                <form action="{{ route('createSubject') }}" method="post">
                    {{csrf_field()}}
                    <div class="w3-row-padding">
                        <div class="w3-col s12">
                            <label for="sbj_title">Title</label>
                            <input class="w3-input w3-round w3-border" type="text" name="sbj_title">
                        </div>
                    </div>
                    <div class="w3-row-padding">
                        <div class="w3-col s12">
                            <label for="sbj_descr">Description</label>
                            <textarea class="w3-input w3-border w3-round" name="sbj_descr" rows="4" cols="50"></textarea>
                        </div>
                    </div>                 
                    <div class="w3-row-padding">
                        <div class="w3-half">
                            <label for="sbj_price">Price</label>
                            <input class="w3-input w3-round w3-border" type="number" min="0" step="any" name="sbj_price">
                        </div>
                        <div class="w3-half">
                            <label for="sbj_learnHours">Learning hours</label>
                            <input class="w3-input w3-round w3-border" type="number" min="0" step="1" name="sbj_learnHours">
                        </div>
                    </div>
                    <br />
                    <button class="w3-button w3-black w3-round" type="submit">Register Subject</button>
                </form>
                
                </div>
            </div>
        </div>
        </div>
        <div class="w3-padding">
                <table class="w3-table w3-striped w3-bordered">
                <thead class="w3-black">
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price (RM) </th>      
                    <th>Learning Hours</th>
                </thead>
                @foreach ($subjectItems as $subjectItem)
                <tr>
                    <!-- <td>{{ $loop->iteration }}</td> -->
                    <td>{{ $subjectItem->id}}</td>
                    <td>{{ $subjectItem->subject_title}}</td>
                    <td>{{ $subjectItem->subject_description}}</td>
                    <td>{{ $subjectItem->subject_price}}</td>
                    <td>{{ $subjectItem->subject_learningHours}}</td>
                </tr>
                @endforeach
                </table>
            </div>

        
        <footer><p> copyright halHasmad©</p></footer>
</body>
</html>