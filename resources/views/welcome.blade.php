@extends('layout.master')

@section('content')
<h1>wuba luba dub dub</h1>
<div class='content'>
  <form action='/api/payment' method='POST'>
    <script
      src="https://checkout.stripe.com/checkout.js" class='stripe-button'
      data-key='pk_test_ZJUgAhjMwHFc6Ao5s6Bx5trg'
      data-amount='1000'
      data-name='Someone'
      data-description='example'
      data-locale='auto'
      data-currency='usd'
      >
    </script>
  </form>
</div>
@endsection
