
<div id="blogOverview">
  <h2>Hello {{ Auth::user()->name }}!</h2>

    <p>You have uploaded five articels on your blog. Build a fandom by regulary publishing your
      pieces. We ask a one time fee of 9,99 euro to support the platform.<br />
      Would you like to continue to publish your articles for you reader?<br />
      Please fill out this form to give us a one-time incasso of 9,99 euro for your blog.
  </p>
  <p>Thank you for being supportive!</p>

    <form method="POST" action="../paywall">
      {{ csrf_field() }}

      <div id="blogPage">
        <input type="text" name="naam" placeholder="name" id="naam"> <br /><br />
        <input type="text" name="IBAN" placeholder="IBAN number" id="IBAN"> <br /><br />

        <input type="submit" id="btnSubBank" align="center" value="submit">
      </div>
    </form>
  </div>
