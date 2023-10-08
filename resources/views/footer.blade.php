<style>

  main {
    flex-grow: 1;
    padding: 20px;
  }

  /* Style the footer */
  footer {
    background-color:rgba(37, 37, 37, 1);
;
    color:rgba(116, 116, 116, 1);

    text-align: center;
    padding: 20px;
  }

  .footer-style {
    display: flex;
    justify-content: space-between;
    align-items: center; /* Vertically center align content */
  }

  .footer-image {
    width: 170px;
    height: 45px;
  }
</style>

<footer>
  <div class="footer-style">
    <div class="copy-right-text">
      <p style="font-family: Roboto; font-size:15px">&copy; COPYRIGHT © DRASS ALL RIGHTS RESERVED | PRIVACY POLICY</p>
    </div>
    <div style="font-family:    Roboto">
      <img src="{{asset('images/white-logo.png')}}" alt="Image Description" class="footer-image">
    </div>
  </div>
</footer>
