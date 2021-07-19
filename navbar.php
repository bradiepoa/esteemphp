<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo mr-auto"><img src="{% static 'img/logo.JPG' %}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="link"><a href="index.php">Our comapany</a></li>

          <li class="drop-down"><a href="about.php">About Us</a>
            <ul>
              <li><a href="about.php">About Us</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="clients.php">Our Clients</a></li>
              <li><a href="">Careers</a></li>
              <li><a href="testimonies_page.php">Testimonials</a></li>
              <li class="drop-down"><a href="">Administration Only</a>
                <ul>
                  <li><a href="">Login</a></li>
                  <li><a href="">Register</a></li>
                </ul>
              </li>
            </ul>
          </li>

           <li class="drop-down"><a href="{% url 'consults:projectpage' %}">Our Services</a>
            <ul>
              <li><a href="project.php">Our Services</a></li>
              
              <li class="drop-down"><a href="{% url 'consults:projectpage' %}">Strategic Planning</a>
                <ul>
                  <li><a href="{% url 'consults:projectpage' %}">Business Plan</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Strategic Development
                  </a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="">M & E</a>
                <ul>
                  <li><a href="{% url 'consults:projectpage' %}">Baselines</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Midterm Evaluation</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">End-term Evaluation</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">impact assessment</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">M & E System, Frameworks and tools de</a></li>
                </ul>
              </li>

              <li class="drop-down"><a href="#">Support Organisation Growth</a>
                <ul>
                  <li><a href="{% url 'consults:projectpage' %}">Capacity assessment</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Capacity Building</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Institutional performance</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Resource mobilization</a></li>
                   <li><a href="{% url 'consults:projectpage' %}">Development of fundable proposals</a></li>
                   <li><a href="{% url 'consults:projectpage' %}">Training</a></li>
                </ul>
              </li>


              <li class="drop-down"><a href="#">Policy development</a>
                <ul>
                  <li><a href="{% url 'consults:projectpage' %}">Value Chain analysis</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Economic viability assessments</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Post-harvest handling</a></li>
                </ul>
              </li>

              <li class="drop-down"><a href="#">ICT Services</a>
                <ul>
                  <li><a href="{% url 'consults:projectpage' %}">Excutive Training</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">ICT strategy development</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Enterprise architecture development</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">System and software concept development</a></li>
                </ul>
              </li>

              <li class="drop-down"><a href="#">Research and Development</a>
                <ul>
                  <li><a href="{% url 'consults:projectpage' %}">Market research</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Opinion Polls</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Tracer studies</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">User satisfaction studies</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Survay</a></li>
                  <li><a href="{% url 'consults:projectpage' %}">Feasibility studies</a></li>
                </ul>
              </li>
              
            </ul>
          </li>

          <li><a href="clients.php">Our Clients</a></li>
          <li><a href="Contact.php">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
  <hr style="color: gold" width="80%">
  <hr style="color: gold">