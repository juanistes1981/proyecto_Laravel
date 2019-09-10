@extends("layouts")

@section("title")
  Preguntas Frecuentes
@endsection

@section("css")
@yield("faq.css")
@endsection

@section("main")
<body>
  <div class="jumbotron">
    <h1>Preguntas Frecuentes</h1>
  </div>
  <div class="container-faq">
      <h3>¿Cuáles son los medios de pago aceptados?</h3>
            <p>Los medios de pago aceptados son:

            -Tarjetas de Débito y Credito Visa o Mastercard
            -Pago mis cuentas</p>

    </div>

  <div class="container-faq">
        <h3>¿Cuánto cuesta el envío?</h3>

          <p>El envio se calcula segun la cantidad de kilometros. En el momento que pidas el producto se te mostrara un estimado del costo.</p>
</div>

<div class="container-faq">
      <h3>¿En cuánto tiempo recibo mi pedido?</h3>

        <p>El tiempo maximo estimado es de 10 días dependiendo de la localidad.  En caso que desee recir el pedido en una menor cantidad de tiempo debera abonar una tarifa diferente </p>
</div>

<div class="container-faq">
        <h3>Me gustaría enviar un regalo, ¿es posible?</h3>

        <p>Por supuesto! no pierdas la oportuniad de hacer el mejor regalo. Inicanos en la direcion de envio donde deseas que llegue e indica que deseas recibir la factura a tu email.</p>
</div>

<div class="container-faq">
      <h3> No encuentro la respuesta a mi pregunta, ¿qué hago?</h3>

      <p>Haga clic en la página de "Contactos" y envíenos su pregunta, le responderemos tan pronto como sea posible.</p>
</div>
</body>

@endsection
