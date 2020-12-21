// Insert Stripe publishable key below.
var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

var elements = stripe.elements();

var style = {
  base: {
    color: '#32325d',
    lineHeight: '18px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a',
    background: '#ffffff'
  }
};

document.querySelector('#payment-form button').classList = 'btn btn-primary btn-block mt-4';

var card = elements.create('card', {hidePostalCode: true, style: style});

card.mount('#card-element');

card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  form.submit();
}


let option = document.getElementById("def_opt");

function check_opt() {
  let cur_option = document.getElementById("def_opt").value;
  if(cur_option != '') {
    option.style = "color: #000000";
    document.getElementsByClassName("def_opt").style = "color: #000000";
  }
}
