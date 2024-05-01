<!DOCTYPE html>
<!-- saved from url=(0034)https://nstinfra.co.in/rentals.php -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NST Rentals</title>

  <script src="rent-resources/jquery-3.6.0.min.js.download"></script>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="rent-resources/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="./css/rent-style.css">
  <link rel="stylesheet" href="./css/all.min(1).css">
  <link rel="stylesheet" href="./css/rentals.css">
  <link rel="stylesheet" href="./css/cart.css">
  <link rel="stylesheet" href="./css/all.min(2).css" integrity="sha512-pzjUcbhQ2gXe82G5CxQ4Oy7G5W1/+nIckED15tkCxiiLPO5oI+bCXNfFv/b0JOs82HZzlSG9+hwnR23UKBo97g==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="https://kit.fontawesome.com/c50d64cd93.js" crossorigin="anonymous"></script>

  <style>
    .content-2 {
      display: none;
    }

    .active {
      display: block;
    }

    .sub {
      background-color: white;
      color: black;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .sub:hover {
      background-color: black;
      color: white;
    }

    .flex-box {
      display: flex;
      flex-wrap: wrap;
    }

    .cart_item {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .cart_item img {
      width: 100px;
      height: auto;
      margin-right: 10px;
    }

    .cart_item .delete_button {
      font-size: 18px;
      background-color: transparent;
      border: none;
      color: black;
      cursor: pointer;
      transition: color 0.3s;
    }

    .cart_item .delete_button:hover {
      color: grey;
    }

    .summary_card {
      max-height: 212px;
      height: max-content !important;
      overflow-y: auto;
      /*border:1px solid gray;*/
    }

    .cart_item .delete_button {
      margin-left: auto;
      font-size: 20px;
      padding: 5px;
    }

    /* Add this CSS code to your page or CSS file */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 300px;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      z-index: 1000;
      max-height: 600px;
      max-width: 500px;
      height: 400px;
      width: 500px;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .nflex {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }


    .nflex button {
      background-color: transparent;
      border: 0px;
      position: fixed;
      left: 85%;
    }

    @media screen and (max-width: 600px) {
      .popup {
        width: 80%;
        height: 301px;


      }
    }

    .popup iframe {
      width: 400px;
      height: 280px;
    }

    @media screen and (max-width: 600px) {
      .popup iframe {
        width: 90%;
        height: fit-content;
      }
    }
  </style>

</head>

<body>
  <nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><strong>NST Rentals</strong></div>
    <ul class="links">
      <li><a href="https://nstinfra.co.in/rentals.php#home">Home</a></li>
      <li><a href="https://nstinfra.co.in/rentals.php#projects">Rent Equipments</a></li>
      <li><a href="https://nstinfra.co.in/rentals.php#about">About Us</a></li>
      <li><a href="https://nstinfra.co.in/rentals.php#work">Contact Us</a></li>


    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>
  <div class="equipments">
    <div class="head">
      <h1>Our Equipments</h1>
    </div>
    <div class="buttons">
      <a href="#" class="button active" data-content="c1">
        Cranes
      </a>
      <a href="#" class="button" data-content="c2">
        Excavators
      </a>
      <a href="#" class="button" data-content="c3">
        Breakers
      </a>
      <a href="#" class="button" data-content="c4">
        Others
      </a>
    </div>


    <div class="order_summary">
      <h1>Enquiry Cart</h1>
      <div class="summary_card scrolling-container">
        <div id="cart_items" style="min-height: 4em;"></div>
        <input type="submit" class="sub2" name="enquiry" value="Proceed for enquiry" id="proceed_button">
      </div>
    </div>
  </div>
  </div>
  <div class="frame" style="width: 100%; position: absolute; top: 120%;">
    <iframe src="rent-resources/raw.html" width="100%" height="700" style="margin-top: 0px;"></iframe>
  </div>
  <form method="post" target="hidden_iframe">

    <div class="content">
      <iframe name="hidden_iframe" style="display: none;" src="rent-resources/saved_resource.html"></iframe>
      <div class="content-2 c1 active">
        <!--Content for button b1 (Cranes)-->
        <p>CONTENT 1</p>
        <div class="flex-box">

          <div class="card">
            <img class="img" src="rent-resources/hydra12.webp" alt="Card 1">
            <h2>Hydra 12 Ton</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup15">Read More</a><input type="submit" class="sub" name="hydra12" value="Add for enquiry">
          </div>

          <div class="popup" id="popup15">
            <div class="popup-content">
              <div class="nflex">
                <h2>Hydra 12 Ton</h2>
                <button onclick="closePopup('popup15')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <p>This is additional information about the Hydra 12 Ton.</p>
              <iframe src="hydra14.html"></iframe>


            </div>
          </div>

          <div class="card">
            <img class="img" src="rent-resources/hydra_01.jpg" alt="Card 1">
            <h2>Hydra 14 Ton</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup1">Read More</a><input type="submit" class="sub" name="hy" value="Add for enquiry">
          </div>

          <div class="popup" id="popup1">
            <div class="popup-content">
              <div class="nflex">
                <h2>Hydra 14 Ton</h2>
                <button onclick="closePopup('popup1')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <p>This is additional information about the Hydra 14 Ton.</p>
              <iframe src="hydra14.html"></iframe>


            </div>
          </div>

          <div class="card">
            <img class="img" src="rent-resources/hydra_02.jpg" alt="Card 1">
            <h2>Hydra 15 Ton</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup2">Read More</a><input type="submit" class="sub" name="hy2" value="Add for enquiry">
          </div>

          <div class="popup" id="popup2">
            <div class="popup-content">
              <div class="nflex">
                <h2>Hydra 15 Ton</h2>
                <button onclick="closePopup('popup2')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="hydra15.html"></iframe>
            </div>
          </div>

          <div class="card">
            <img class="img" src="rent-resources/farana.png" alt="Card 1">
            <h2>Farana</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup4">Read More</a><input type="submit" class="sub" name="farana" value="Add for enquiry">
          </div>

          <div class="popup" id="popup4">
            <div class="popup-content">
              <div class="nflex">
                <h2>Farana</h2>
                <button onclick="closePopup('popup4')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="farana.html"></iframe>
            </div>
          </div>


          <div class="card">
            <img class="img" src="rent-resources/mobilecrane.webp" alt="Card 1">
            <h2>Mobile Crane</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup16">Read More</a><input type="submit" class="sub" name="mobilecrane" value="Add for enquiry">
          </div>

          <div class="popup" id="popup16">
            <div class="popup-content">
              <div class="nflex">
                <h2>Farana</h2>
                <button onclick="closePopup('popup16')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="mobilecrane.html"></iframe>
            </div>
          </div>



          <div class="card">
            <img class="img" src="rent-resources/static.jpg" alt="Card 1">
            <h2>Static</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup3">Read More</a><input type="submit" class="sub" name="static" value="Add for enquiry">
          </div>

          <div class="popup" id="popup3">
            <div class="popup-content">
              <div class="nflex">
                <h2>Static Crane</h2>
                <button onclick="closePopup('popup3')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="staticcrane.html"></iframe>
            </div>
          </div>



        </div>
      </div>
      <div class="content-2 c2">
        <!---Content for button b2 (Excavators)-->
        <p>CONTENT 2</p>
        <div class="flex-box">
          <div class="card">
            <img class="img" src="rent-resources/excavator.jpg" alt="Card 1">
            <h2>Excavator</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup5">Read More</a><input type="submit" class="sub" name="ex" value="Add for enquiry">
          </div>

          <div class="popup" id="popup5">
            <div class="popup-content">
              <div class="nflex">
                <h2>Excavator</h2>
                <button onclick="closePopup('popup5')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="excavator.html"></iframe>
            </div>
          </div>

          <div class="card">
            <img class="img" src="rent-resources/excavator.jpg" alt="Card 1">
            <h2>Excavator 2</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup6">Read More</a><input type="submit" class="sub" name="ex2" value="Add for enquiry">
          </div>

          <div class="popup" id="popup6">
            <div class="popup-content">
              <div class="nflex">
                <h2>Excavator 2</h2>
                <button onclick="closePopup('popup6')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="excavator2.html"></iframe>
            </div>
          </div>

        </div>
      </div>
      <div class="content-2 c3">
        <!--Content for button b3 (Breakers/Crushers)-->
        <p>CONTENT 3</p>
        <div class="flex-box">
          <div class="card">
            <img class="img" src="rent-resources/road-breaker.jpg" alt="Card 1">
            <h2>Road Breaker</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup7">Read More</a><input type="submit" class="sub" name="rb" value="Add for enquiry">
          </div>

          <div class="popup" id="popup7">
            <div class="popup-content">
              <div class="nflex">
                <h2>Road Breaker</h2>
                <button onclick="closePopup('popup7')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="roadbreaker.html"></iframe>
            </div>
          </div>

          <div class="card">
            <img class="img" src="rent-resources/road-roller.jpg" alt="Card 1">
            <h2>Road roller</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup8">Read More</a><input type="submit" class="sub" name="rr" value="Add for enquiry">
          </div>

          <div class="popup" id="popup8">
            <div class="popup-content">
              <div class="nflex">
                <h2>Road Roller</h2>
                <button onclick="closePopup('popup8')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="roadroller.html"></iframe>
            </div>
          </div>

        </div>
      </div>
      <div class="content-2 c4">
        <!--Content for button b4 (Others)-->
        <p>CONTENT 4</p>
        <div class="flex-box">

          <div class="card">
            <img class="img" src="rent-resources/jcb.webp" alt="Card 1">
            <h2>JCB</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup9">Read More</a><input type="submit" class="sub" name="jcb" value="Add for enquiry">
          </div>

          <div class="popup" id="popup9">
            <div class="popup-content">
              <div class="nflex">
                <h2>JCB</h2>
                <button onclick="closePopup('popup9')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="jcb.html"></iframe>
            </div>
          </div>

          <div class="card">
            <img class="img" src="rent-resources/ajax-fiori.png" alt="Card 1">
            <h2>Ajax fiori</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup10">Read More</a><input type="submit" class="sub" name="ajf" value="Add for enquiry">
          </div>

          <div class="popup" id="popup10">
            <div class="popup-content">
              <div class="nflex">
                <h2>Ajax Fiori</h2>
                <button onclick="closePopup('popup10')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="ajax-fiori.html"></iframe>
            </div>
          </div>

          <div class="card">
            <img class="img" src="rent-resources/hyva_01.jpg" alt="Card 1">
            <h2>Hyva</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup11">Read More</a><input type="submit" class="sub" name="hyv" value="Add for enquiry">
          </div>

          <div class="popup" id="popup11">
            <div class="popup-content">
              <div class="nflex">
                <h2>Hyva</h2>
                <button onclick="closePopup('popup11')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="hyva.html"></iframe>
            </div>
          </div>

          <div class="card">
            <img class="img" src="rent-resources/hyva_02.jpg" alt="Card 1">
            <h2>Hyva 2</h2>
            <p class="title">This is a demo post.</p>
            <a href="#" class="read-more" data-popup-id="popup12">Read More</a><input type="submit" class="sub" name="hyv2" value="Add for enquiry">
          </div>

          <div class="popup" id="popup12">
            <div class="popup-content">
              <div class="nflex">
                <h2>Hyva 2</h2>
                <button onclick="closePopup('popup12')">
                  <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/delete-sign.png" alt="delete-sign" /></button>
              </div>
              <iframe src="hyva2.html"></iframe>
            </div>
          </div>



        </div>
      </div>



      <!-- ==================================================
  CART 
========================================================-->


      <!-- ==================================================
  FAQS 
========================================================-->


      <!-- ==================================================
  FAQS OVER 
  javascript for prod card
========================================================-->

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var buttons = document.getElementsByClassName('button');
          for (var i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener('click', function() {
              var contentId = this.getAttribute('data-content');

              // Remove active class from all buttons
              for (var j = 0; j < buttons.length; j++) {
                buttons[j].classList.remove('active');
              }

              // Remove active class from all content sections
              var contents = document.getElementsByClassName('content-2');
              for (var j = 0; j < contents.length; j++) {
                contents[j].classList.remove('active');
              }

              // Add active class to the clicked button
              this.classList.add('active');

              // Show the corresponding content section
              var content = document.getElementsByClassName(contentId)[0];
              content.classList.add('active');
            });
          }
        });
      </script>
      <script src="rent-resources/faqs.js.download"></script>

      <script>
        //     document.addEventListener("DOMContentLoaded", function() {
        //     const addToEnquiryButtons = document.querySelectorAll(".sub");
        //     addToEnquiryButtons.forEach(button => {
        //       button.addEventListener("click", function(event) {
        //         event.preventDefault();
        //         const productName = button.parentElement.querySelector("h2").textContent;
        //         console.log("Product Name:", productName);

        //         // Get the selected item details based on the clicked submit button
        //         var itemName;
        //         var imageSrc;
        //         var submitButton = event.target.closest("input[type='submit']");

        //         if (submitButton.name === 'hy') {
        //           itemName = "Hydra 14 Ton";
        //           imageSrc = "images/hydra_01.jpg";
        //         } else if (submitButton.name === 'hy2') {
        //           itemName = "Hydra 15 Ton";
        //           imageSrc = "images/hydra_02.jpg";
        //         }
        //   else if (submitButton.name === 'static') {
        //     itemName = "Static";
        //     imageSrc = "images/static.jpg";
        //   } else if (submitButton.name === 'farana') {
        //     itemName = "Farana";
        //     imageSrc = "images/farana.png";
        //   } else if (submitButton.name === 'ex') {
        //     itemName = "Excavator";
        //     imageSrc = "images/excavator.jpg";
        //   } else if (submitButton.name === 'ex2') {
        //     itemName = "Excavator 2";
        //     imageSrc = "images/excavator.jpg";
        //   } else if (submitButton.name === 'rb') {
        //     itemName = "Road Breaker";
        //     imageSrc = "images/road-breaker.jpg";
        //   } else if (submitButton.name === 'rr') {
        //     itemName = "Road roller";
        //     imageSrc = "images/road-roller.jpg";
        //   } else if (submitButton.name === 'jcb') {
        //     itemName = "JCB";
        //     imageSrc = "images/jcb.webp";
        //   } else if (submitButton.name === 'ajf') {
        //     itemName = "Ajax Fiori";
        //     imageSrc = "images/ajax-fiori.png";
        //   } else if (submitButton.name === 'hyv') {
        //     itemName = "Hyva";
        //     imageSrc = "images/hyva_01.jpg";
        //   } else if (submitButton.name === 'hyv2') {
        //     itemName = "Hyva 2";
        //     imageSrc = "images/hyva_02.jpg";
        //   }

        //     // Create the cart item container
        //     var cartItem = document.createElement('div');
        //     cartItem.className = 'cart_item';

        //     // Create the product name element
        //     var productNameElement = document.createElement('h2');
        //     productNameElement.textContent = itemName;

        //     // Create the product image
        //     var productImage = document.createElement('img');
        //     productImage.src = imageSrc;
        //     productImage.alt = itemName;

        //     // Create the delete button
        //     var deleteButton = document.createElement('button');
        //     deleteButton.className = 'delete_button';
        //     deleteButton.innerHTML = '<i class="fas fa-trash"></i>';

        //     // Add the elements to the cart item
        //     cartItem.appendChild(productNameElement);
        //     cartItem.appendChild(productImage);
        //     cartItem.appendChild(deleteButton);

        //     // Add the cart item to the cart
        //     var cartItems = document.getElementById('cart_items');
        //     cartItems.appendChild(cartItem);

        //     // Add the light-styled <hr> after each cart item
        //     var hrElement = document.createElement('hr');
        //     hrElement.style.borderTop = "1px solid #f1f1f1";
        //     cartItems.appendChild(hrElement);

        //     // Display a success message
        //     alert(itemName + ' added to cart successfully');

        //     // Attach click event listener to the delete button
        //     deleteButton.addEventListener('click', function(event) {
        //       event.preventDefault(); // Prevent default button behavior
        //       cartItem.remove(); // Remove the item from the cart
        //       hrElement.remove(); // Remove the <hr> element as well
        //     });
        //   });
        // });
        //   });
      </script>






      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const addToEnquiryButtons = document.querySelectorAll(".sub");
          var cartCount = 0; // Counter variable
          var cartProducts = []; // Array to store product names in the cart

          addToEnquiryButtons.forEach(button => {
            button.addEventListener("click", function(event) {
              event.preventDefault();
              const productName = button.parentElement.querySelector("h2").textContent;

              // Check if the product is already in the cart
              if (cartProducts.includes(productName)) {
                alert("Product already in the cart");
                return; // Exit the function
              }

              // Get the selected item details based on the clicked submit button
              var itemName;
              var imageSrc;
              var submitButton = event.target.closest("input[type='submit']");


              if (submitButton.name === 'hy') {
                itemName = "Hydra 14 Ton";
                imageSrc = "images/hydra_01.jpg";
              } else if (submitButton.name === 'hy2') {
                itemName = "Hydra 15 Ton";
                imageSrc = "images/hydra_02.jpg";
              } else if (submitButton.name === 'static') {
                itemName = "Static";
                imageSrc = "images/static.jpg";
              } else if (submitButton.name === 'farana') {
                itemName = "Farana";
                imageSrc = "images/farana.png";
              } else if (submitButton.name === 'ex') {
                itemName = "Excavator";
                imageSrc = "images/excavator.jpg";
              } else if (submitButton.name === 'ex2') {
                itemName = "Excavator 2";
                imageSrc = "images/excavator.jpg";
              } else if (submitButton.name === 'rb') {
                itemName = "Road Breaker";
                imageSrc = "images/road-breaker.jpg";
              } else if (submitButton.name === 'rr') {
                itemName = "Road roller";
                imageSrc = "images/road-roller.jpg";
              } else if (submitButton.name === 'jcb') {
                itemName = "JCB";
                imageSrc = "images/jcb.webp";
              } else if (submitButton.name === 'ajf') {
                itemName = "Ajax Fiori";
                imageSrc = "images/ajax-fiori.png";
              } else if (submitButton.name === 'hyv') {
                itemName = "Hyva";
                imageSrc = "images/hyva_01.jpg";
              } else if (submitButton.name === 'hyv2') {
                itemName = "Hyva 2";
                imageSrc = "images/hyva_02.jpg";
              } else if (submitButton.name === 'hydra12') {
                itemName = "Hydra 12";
                imageSrc = "images/hydra12.webp";
              } else if (submitButton.name === 'mobilecrane') {
                itemName = "Mobile Crane";
                imageSrc = "images/mobilecrane.webp";
              }


              // Create the cart item container
              var cartItem = document.createElement('div');
              cartItem.className = 'cart_item';

              // Create the product name element with count
              var productNameElement = document.createElement('h2');
              cartCount++; // Increment the counter
              productNameElement.textContent = cartCount + '. ' + itemName; // Display count and product name

              // Create the product image
              var productImage = document.createElement('img');
              productImage.src = imageSrc;
              productImage.alt = itemName;

              // Create the delete button
              var deleteButton = document.createElement('button');
              deleteButton.className = 'delete_button';
              deleteButton.innerHTML = '<i class="fas fa-trash"></i>';

              // Add the elements to the cart item
              cartItem.appendChild(productNameElement);
              cartItem.appendChild(productImage);
              cartItem.appendChild(deleteButton);

              // Add the cart item to the cart
              var cartItems = document.getElementById('cart_items');
              cartItems.appendChild(cartItem);

              // Add the light-styled <hr> after each cart item
              var hrElement = document.createElement('hr');
              hrElement.style.borderTop = "1px solid #f1f1f1";
              cartItems.appendChild(hrElement);

              // Add the product name to the cart products list
              cartProducts.push(productName);

              // Attach click event listener to the delete button
              deleteButton.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default button behavior
                cartItem.remove(); // Remove the item from the cart
                hrElement.remove(); // Remove the <hr> element as well

                // Update the cart count and reassign count for remaining items
                cartCount--;

                // Get the updated cart items after deletion
                var updatedCartItems = document.querySelectorAll('.cart_item');

                // Update the count for each remaining item
                updatedCartItems.forEach((item, index) => {
                  var productNameElement = item.querySelector("h2");
                  productNameElement.textContent = (index + 1) + '. ' + productNameElement.textContent.slice(3);
                });

                // Remove the product name from the cart products list
                var index = cartProducts.indexOf(productName);
                if (index !== -1) {
                  cartProducts.splice(index, 1);
                }
              });
            });
          });

          // Function to send cartProducts to PHP via AJAX
          function sendCartProductsToPHP() {
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Prepare the AJAX request
            xhr.open("POST", "store_cart_products.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Convert the cartProducts array to a JSON string
            var cartProductsJSON = JSON.stringify(cartProducts);

            // Send the AJAX request with the cartProducts data
            xhr.send("cartProducts=" + cartProductsJSON);

            // Display a success message using an alert
            alert("Redirecting to Form page with added Products");
            // Redirect to rental-form.php
            window.location.href = "rental-form.php";
          }

          // Attach click event listener to the "Proceed for Enquiry" button
          var proceedButton = document.getElementById('proceed_button');
          proceedButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default button behavior


            // Send the cartProducts array to PHP via AJAX
            sendCartProductsToPHP();
          });
        });
      </script>




      <script>
        // JavaScript to handle the popup
        const popups = document.querySelectorAll('.popup');
        const readMoreBtns = document.querySelectorAll('.read-more');

        readMoreBtns.forEach(function(btn) {
          btn.addEventListener('click', function(event) {
            event.preventDefault();
            const popupId = btn.getAttribute('data-popup-id');
            openPopup(popupId);
          });
        });

        function openPopup(popupId) {
          const popup = document.getElementById(popupId);
          popup.style.display = 'flex';
        }

        function closePopup(popupId) {
          const popup = document.getElementById(popupId);
          popup.style.display = 'none';
        }
      </script>


</body>

</html>