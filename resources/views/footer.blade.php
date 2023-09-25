<style>
  main {
    flex-grow: 1; /* Allow the main content to grow and take up remaining space */
    padding: 20px;
}

/* Style the footer */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    position: fixed;
    bottom: 0;
    width:100%;
    height:15%;

}
.footer-style {
    display: flex;
    justify-content: space-between;
  }
.footer-style p {
    margin-right: 10px; /* Adjust the margin as needed to create the desired space */
  }
</style>

<footer>
  <div class="row">
    <div class="col-md-6">
      <p>&copy; COPYRIGHT © DRASS ALL RIGHTS RESERVED | PRIVACY POLICY</p>
      
    </div>
    <div class="col-md-6">
    
        <img src="{{URL('images/DrassLogo1.png')}}" alt="">
        

    </div>
  </div>
</footer>