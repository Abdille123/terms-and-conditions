<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register for Open Day | University Open Day</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <main class="py-5">
    <div class="container">
      <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Register for Open Day</li>
        </ol>
      </nav>

      <section class="content-section bg-white shadow-sm rounded-lg p-4 p-md-5">
        <h1 class="section-title text-center mb-5" data-aos="fade-up">Register for Open Day</h1>
        <div class="row justify-content-center">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <form action="register.php" method="post">
              <div class="mb-4">
                <label for="full_name" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
              </div>

              <div class="mb-4">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="mb-4">
                <label for="study_level" class="form-label">Study Level:</label>
                <select id="study_level" name="study_level" class="form-select" required>
                  <option value="" disabled selected>Select your study level</option>
                  <option value="Undergraduate">Undergraduate</option>
                  <option value="Postgraduate">Postgraduate</option>
                  <option value="PhD">PhD</option>
                </select>
              </div>

              <div class="mb-4">
                <label for="subject_interest" class="form-label">Subject of Interest:</label>
                <select id="subject_interest" name="subject_interest" class="form-select" required>
                  <option value="" disabled selected>Select your subject of interest</option>
                  <option value="Maths">Maths</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Cybersecurity">Cybersecurity</option>
                  <option value="Computer Science">Computer Science</option>
                </select>
              </div>

              <div class="mb-4">
                <label for="guests" class="form-label">Number of Guests:</label>
                <select id="guests" name="guests" class="form-select" required>
                  <option value="" disabled selected>Select number of guests</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>

              <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="termsCheck" required>
                <label class="form-check-label" for="termsCheck">
                  I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">terms and conditions</a>
                </label>
              </div>

              <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary btn-lg">Register Now</button>
                <button type="button" class="btn btn-outline-danger btn-sm ms-3 deleteBtn" data-bs-toggle="modal" data-bs-target="#deleteModal">
                  Delete Registration
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="delete.php" method="post" id="delete-form">
            <div class="mb-3">
              <label for="delete_email" class="form-label">Enter your registered email address:</label>
              <input type="email" class="form-control" id="delete_email" name="delete_email" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" form="delete-form">Delete Registration</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Privacy Policy Modal -->
  <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Privacy Policy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-light px-4 py-4" style="max-height: 80vh; overflow-y: auto;">
          <div class="container-fluid">
            <h1 class="text-center text-primary fw-bold mb-3">
              <i class="bi bi-shield-lock-fill me-2"></i>Privacy Policy
            </h1>
            <p class="text-center text-muted fst-italic mb-4">Effective Date: February 3, 2025</p>

            <section class="mb-4">
              <h5 class="fw-bold text-dark border-bottom pb-2">1. Introduction</h5>
              <p>At Wolfie’s Open Day, we are committed to protecting the privacy of individuals who interact with our website. This Privacy Policy explains how we collect, use, and safeguard your information in accordance with data protection laws.</p>
            </section>

            <section class="mb-4">
              <h5 class="fw-bold text-dark border-bottom pb-2">2. Information We Collect</h5>
              <ul class="ps-3">
                <li>Full name</li>
                <li>Email address</li>
                <li>Level of study and subject interest</li>
                <li>Number of guests</li>
                <li>IP address and browser information (for security and analytics)</li>
              </ul>
            </section>

            <section class="mb-4">
              <h5 class="fw-bold text-dark border-bottom pb-2">3. How We Use Your Data</h5>
              <p>Your personal data is used solely to process your registration for the Open Day event. We may use anonymized, non-identifiable information to analyze site traffic or improve user experience.</p>
            </section>

            <section class="mb-4">
              <h5 class="fw-bold text-dark border-bottom pb-2">4. Legal Basis for Processing</h5>
              <p>We process your personal data based on your explicit consent. You may withdraw your consent at any time using the provided delete option or by contacting us.</p>
            </section>

            <section class="mb-4">
              <h5 class="fw-bold text-dark border-bottom pb-2">5. Cookies and Tracking</h5>
              <p>This site uses basic cookies to maintain session states. No advertising or tracking cookies are used.</p>
            </section>

            <section class="mb-4">
              <h5 class="fw-bold text-dark border-bottom pb-2">6. Data Storage</h5>
              <p>All data is stored temporarily on secure local systems for academic purposes only and deleted regularly. No commercial data storage takes place.</p>
            </section>

            <section class="mb-4">
              <h5 class="fw-bold text-dark border-bottom pb-2">7. Your Rights</h5>
              <ul class="ps-3">
                <li>Access or correct your information</li>
                <li>Request deletion of your data</li>
                <li>Withdraw consent for data processing</li>
              </ul>
              <p>To exercise your rights, contact us via the email address below.</p>
            </section>

            <section class="mb-4">
              <h5 class="fw-bold text-dark border-bottom pb-2">8. Contact</h5>
              <p>Email: <a href="mailto:H.Rahahala@wlv.ac.uk">H.Rahahala@wlv.ac.uk</a></p>
            </section>

            <section>
              <h5 class="fw-bold text-dark border-bottom pb-2">9. Disclaimer</h5>
              <p>This platform is for educational demonstration purposes only and does not reflect real data collection.</p>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/scripts.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const deleteModal = document.getElementById('deleteModal');
      const triggerButton = document.querySelector('.deleteBtn');
      let openedManually = false;

      if (triggerButton) {
        triggerButton.addEventListener('click', () => {
          openedManually = true;
        });
      }

      deleteModal.addEventListener('shown.bs.modal', function () {
        if (openedManually) {
          const emailField = document.getElementById('delete_email');
          if (emailField) emailField.value = '';
          const errorMessages = deleteModal.querySelectorAll('.text-danger');
          errorMessages.forEach(msg => msg.remove());
          openedManually = false;
        }
      });

      if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 800, once: true });
      }
    });
  </script>
</body>
</html>
