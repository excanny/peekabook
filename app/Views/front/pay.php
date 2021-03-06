<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Frames v2: Multi Input</title>
  <link rel="stylesheet" href="normalize.css">
  <!-- <link rel="stylesheet" href="style.css"> -->

  <style>
        *, *::before, *::after {
        box-sizing: border-box;
        }

        html {
        padding: 1rem;
        background-color: #FFF;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        iframe {
        /* This fixes a mobile Safari bug */
        height: 38px !important;
        }

        #payment-form {
        width: 280px;
        margin: 0 auto;
        }

        label {
        display: block;
        height: 10px;
        color: #13395E;
        font-size: 14px;
        font-weight: 500;
        line-height: 10px;
        margin: 8px 0;
        }

        .date-and-code {
        display: flex;
        margin-bottom: 8px;
        }

        .date-and-code > div:nth-child(1) {
        width: 55.715%;
        }
        .date-and-code > div:nth-child(2) {
        width: 45.719%;
        }

        .input-container {
        position: relative;
        display: flex;
        height: 40px;
        }
        .icon-container:last-child {
        right: 0;
        }
        .icon-container.payment-method {
        right: 0;
        }

        .input-container.card-number {
        margin-bottom: 8px;
        }
        .input-container.expiry-date {
        margin-right: 4px;
        }
        .input-container.cvv {
        margin-left: 4px;
        }

        .card-number-frame {
        padding-left: 40px;
        }
        .expiry-date-frame {
        padding-left: 40px;
        }
        .cvv-frame {
        padding-left: 40px;
        }

        div + button {
        margin-top: 8px;
        }

        .icon-container {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        width: 26px;
        margin: 0 7px;
        }

        .icon-container.payment-method  {
        transform: translateY(-50%) rotateY(90deg);
        transition: opacity 0.15s ease-out;
        opacity: 0;
        top: 50%;
        }

        .icon-container.payment-method.show {
        opacity: 1;
        transition: all 0.4s ease-out;
        transform: translateY(-50%) rotateY(0deg);
        }

        .icon-container.payment-method img {
        width: 100%;
        }

        [id$="-error"] { display: none }

        .frame {
        opacity: 0;
        }

        .frame--activated {
        opacity: 1;
        border: solid 1px #13395E;
        border-radius: 3px;
        box-shadow: 0 1px 3px 0 rgba(19,57,94,0.2);
        }

        .frame--activated.frame--focus {
        border: solid 1px #13395E;
        box-shadow: 0 2px 5px 0 rgba(19,57,94,0.15);
        }

        .frame--activated.frame--invalid {
        border: solid 1px #D96830;
        box-shadow: 0 2px 5px 0 rgba(217,104,48,0.15);
        }

        .error-message {
        display: block;
        color: #C9501C;
        font-size: .9rem;
        margin: 8px 0 0 1px;
        font-weight: 300;
        }

        #pay-button {
        border: none;
        border-radius: 3px;
        color: #FFF;
        font-weight: 500;
        height: 40px;
        width: 100%;
        background-color: #13395E;
        box-shadow: 0 1px 3px 0 rgba(19,57,94,0.4);
        }

        #pay-button:active {
        background-color: #0B2A49;
        box-shadow: 0 1px 3px 0 rgba(19,57,94,0.4);
        }

        #pay-button:hover {
        background-color: #15406B;
        box-shadow: 0 2px 5px 0 rgba(19,57,94,0.4);
        }

        #pay-button:disabled {
        background-color: #697887;
        box-shadow: none;
        }

        #pay-button:not(:disabled) {
        cursor: pointer;
        }

        .success-payment-message {
        color: #13395E;
        line-height: 1.4;
        }
        .token {
        color: #b35e14;
        font-size: .9rem;
        font-family: monospace;
        }

        /**
        IE11-targeted optimisations
        */
        _:-ms-fullscreen, :root .icon-container {
        display: block;
        }

        _:-ms-fullscreen, :root .icon-container img {
        top: 50%;
        -ms-transform: translateY(-50%);
        position: absolute;
        }

        _:-ms-fullscreen, #icon-card-number,
        _:-ms-fullscreen, #icon-expiry-date,
        _:-ms-fullscreen, #icon-cvv {
        left: 7px;
        }

        #checkout-frames-card-number::-ms-clear {
        display: none;
        }

  </style>
</head>

<body>
    <form id="payment-form" method="POST" action="https://merchant.com/charge-card">
    <label for="card-number">Card number</label>
    <div class="input-container card-number">
      <div class="icon-container">
        <img id="icon-card-number" src="images/card-icons/card.svg" alt="PAN" />
      </div>
      <div class="card-number-frame"></div>
      <div class="icon-container payment-method">
        <img id="logo-payment-method" />
      </div>
      <div class="icon-container">
        <img id="icon-card-number-error" src="images/card-icons/error.svg" />
      </div>
    </div>

    <div class="date-and-code">
      <div>
        <label for="expiry-date">Expiry date</label>
        <div class="input-container expiry-date">
          <div class="icon-container">
            <img id="icon-expiry-date" src="images/card-icons/exp-date.svg" alt="Expiry date" />
          </div>
          <div class="expiry-date-frame"></div>
          <div class="icon-container">
            <img id="icon-expiry-date-error" src="images/card-icons/error.svg" />
          </div>
        </div>
      </div>

      <div>
        <label for="cvv">Security code</label>
        <div class="input-container cvv">
          <div class="icon-container">
            <img id="icon-cvv" src="images/card-icons/cvv.svg" alt="CVV" />
          </div>
          <div class="cvv-frame"></div>
          <div class="icon-container">
            <img id="icon-cvv-error" src="images/card-icons/error.svg"/>
          </div>
        </div>
      </div>
    </div>

    <button id="pay-button" disabled="">
      PAY GBP 25.00
    </button>

    <div>
      <span class="error-message error-message__card-number"></span>
      <span class="error-message error-message__expiry-date"></span>
      <span class="error-message error-message__cvv"></span>
    </div>

    <p class="success-payment-message"></p>
  </form>

  <script src="https://cdn.checkout.com/js/framesv2.min.js"></script>
  <script src="app.js"></script>

  <script>
  
  var payButton = document.getElementById("pay-button");
var form = document.getElementById("payment-form");

Frames.init("pk_test_6ff46046-30af-41d9-bf58-929022d2cd14");

var logos = generateLogos();
function generateLogos() {
  var logos = {};
  logos["card-number"] = {
    src: "card",
    alt: "card number logo"
  };
  logos["expiry-date"] = {
    src: "exp-date",
    alt: "expiry date logo"
  };
  logos["cvv"] = {
    src: "cvv",
    alt: "cvv logo"
  };
  return logos;
}

var errors = {};
errors["card-number"] = "Please enter a valid card number";
errors["expiry-date"] = "Please enter a valid expiry date";
errors["cvv"] = "Please enter a valid cvv code";

Frames.addEventHandler(
  Frames.Events.FRAME_VALIDATION_CHANGED,
  onValidationChanged
);
function onValidationChanged(event) {
  var e = event.element;

  if (event.isValid || event.isEmpty) {
    if (e === "card-number" && !event.isEmpty) {
      showPaymentMethodIcon();
    }
    setDefaultIcon(e);
    clearErrorIcon(e);
    clearErrorMessage(e);
  } else {
    if (e === "card-number") {
      clearPaymentMethodIcon();
    }
    setDefaultErrorIcon(e);
    setErrorIcon(e);
    setErrorMessage(e);
  }
}

function clearErrorMessage(el) {
  var selector = ".error-message__" + el;
  var message = document.querySelector(selector);
  message.textContent = "";
}

function clearErrorIcon(el) {
  var logo = document.getElementById("icon-" + el + "-error");
  logo.style.removeProperty("display");
}

function showPaymentMethodIcon(parent, pm) {
  if (parent) parent.classList.add("show");

  var logo = document.getElementById("logo-payment-method");
  if (pm) {
    var name = pm.toLowerCase();
    logo.setAttribute("src", "images/card-icons/" + name + ".svg");
    logo.setAttribute("alt", pm || "payment method");
  }
  logo.style.removeProperty("display");
}

function clearPaymentMethodIcon(parent) {
  if (parent) parent.classList.remove("show");

  var logo = document.getElementById("logo-payment-method");
  logo.style.setProperty("display", "none");
}

function setErrorMessage(el) {
  var selector = ".error-message__" + el;
  var message = document.querySelector(selector);
  message.textContent = errors[el];
}

function setDefaultIcon(el) {
  var selector = "icon-" + el;
  var logo = document.getElementById(selector);
  logo.setAttribute("src", "images/card-icons/" + logos[el].src + ".svg");
  logo.setAttribute("alt", logos[el].alt);
}

function setDefaultErrorIcon(el) {
  var selector = "icon-" + el;
  var logo = document.getElementById(selector);
  logo.setAttribute("src", "images/card-icons/" + logos[el].src + "-error.svg");
  logo.setAttribute("alt", logos[el].alt);
}

function setErrorIcon(el) {
  var logo = document.getElementById("icon-" + el + "-error");
  logo.style.setProperty("display", "block");
}

Frames.addEventHandler(
  Frames.Events.CARD_VALIDATION_CHANGED,
  cardValidationChanged
);
function cardValidationChanged(event) {
  payButton.disabled = !Frames.isCardValid();
}

Frames.addEventHandler(
  Frames.Events.CARD_TOKENIZATION_FAILED,
  onCardTokenizationFailed
);
function onCardTokenizationFailed(error) {
  console.log("CARD_TOKENIZATION_FAILED: %o", error);
  Frames.enableSubmitForm();
}

Frames.addEventHandler(Frames.Events.CARD_TOKENIZED, onCardTokenized);
function onCardTokenized(event) {
  var el = document.querySelector(".success-payment-message");
  el.innerHTML =
    "Card tokenization completed<br>" +
    'Your card token is: <span class="token">' +
    event.token +
    "</span>";
}

Frames.addEventHandler(
  Frames.Events.PAYMENT_METHOD_CHANGED,
  paymentMethodChanged
);
function paymentMethodChanged(event) {
  var pm = event.paymentMethod;
  let container = document.querySelector(".icon-container.payment-method");

  if (!pm) {
    clearPaymentMethodIcon(container);
  } else {
    clearErrorIcon("card-number");
    showPaymentMethodIcon(container, pm);
  }
}

form.addEventListener("submit", onSubmit);
function onSubmit(event) {
  event.preventDefault();
  Frames.submitCard();
}

  </script>

</body>

</html>
