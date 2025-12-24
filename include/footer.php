<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap');

  footer {
    width: 100vw;
    background: linear-gradient(120deg, #f1f1f1, #e2e2e2);
    padding: 40px 0 20px 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    overflow-x: hidden;
    margin: 0;
  }

  .footer-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 30px;
    padding: 0 20px;
  }

  .footer-section {
    flex: 1 1 220px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    min-width: 200px;
  }

  .footer-section h3 {
    color: #333;
    margin-bottom: 15px;
    font-weight: 600;
    font-size: 18px;
    border-bottom: 2px solid #007BFF;
    padding-bottom: 5px;
    width: 100%;
  }

  .footer-section a {
    display: block;
    color: #000;
    text-decoration: none;
    margin: 8px 0;
    font-size: 15px;
    transition: all 0.3s ease;
  }

  .footer-section a:hover {
    color: #007BFF;
    padding-left: 6px;
  }

  .footer-section p {
    margin: 6px 0;
    color: #333;
    font-size: 15px;
  }

  .footer-bottom {
    width: 100%;
    text-align: center;
    font-size: 14px;
    color: #666;
    border-top: 1px solid #ccc;
    margin-top: 30px;
    padding: 15px 10px 0 10px;
  }

  .footer-section .social-link::before {
    content: "🌐 ";
    margin-right: 6px;
  }

  @media (max-width: 768px) {
    .footer-container {
      flex-direction: column;
      align-items: center;
    }

    .footer-section {
      align-items: center;
      text-align: center;
    }

    .footer-section h3 {
      border: none;
      border-bottom: 2px solid #007BFF;
    }
  }
</style>

<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h3>Quick Links</h3>
      <a href="index.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="#">Shop</a>
      <a href="contact.php">Contact</a>
    </div>

    <div class="footer-section">
      <h3>Extra Links</h3>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a href="#">Cart</a>
      <a href="#">Orders</a>
    </div>

    <div class="footer-section">
      <h3>Contact Us</h3>
      <p>📞 +91 8897654321</p>
      <p>📞 +91 9876543210</p>
      <p>📍India-F&F Fashion</p>
      <p>📧 F&FFashion@gmail.com</p>
    </div>

    <div class="footer-section">
      <h3>Follow Us</h3>
      <a class="social-link" href="https://www.facebook.com/login.php/">Facebook</a>
      <a class="social-link" href="https://x.com/i/flow/login">Twitter</a>
      <a class="social-link" href="https://www.instagram.com/accounts/login/?hl=en">Instagram</a>
      <a class="social-link" href="https://www.linkedin.com/login">LinkedIn</a>
    </div>
  </div>

  <p class="footer-bottom">© 2025 by <strong>UniqueFooter</strong> | All rights reserved.</p>
</footer>
