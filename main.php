<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>React Portfolio</title>
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      padding: 0;
      background-color: #0f0f0f;
      color: white;
      font-family: 'Georgia', serif;
      overflow-y: auto;
    }

    nav {
      width: 100%;
      padding: 20px;
      text-align: center;
      position: sticky;
      top: 0;
      background-color: #0f0f0f;
      z-index: 10;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      gap: 40px;
      padding: 0;
      margin: 0;
    }

    nav li a {
      color: white;
      text-decoration: none;
      font-size: 1rem;
      transition: color 0.3s;
    }

    nav li a:hover {
      color: #aaa;
    }

    .main-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 60px;
    }

    h1 {
      font-size: 4rem;
      letter-spacing: 2px;
      margin-bottom: 40px;
    }

    .frames-row {
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .frame-container {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .frame-container:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
    }

    .string {
      width: 2px;
      height: 40px;
      background-color: white;
    }

    .frame {
      width: 160px;
      height: 200px;
      background: #fff;
      border: 8px solid #333;
      box-shadow: 0 4px 10px rgba(245, 122, 122, 0.6);
      transform-origin: top center;
      animation: swing 3s ease-in-out infinite;
    }

    .frame img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    @keyframes swing {
      0%   { transform: rotate(3deg); }
      50%  { transform: rotate(-3deg); }
      100% { transform: rotate(3deg); }
    }

    .frame-name {
      margin-top: 10px;
      font-size: 1rem;
      color: #ffcc70;
      font-weight: bold;
      text-align: center;
      text-decoration: none;
    }

    .about-section {
      padding: 80px 10%;
      text-align: center;
    }

    .about-section h2 {
      font-size: 2.5rem;
      color: #ffcc70;
      margin-bottom: 20px;
    }

    .about-section p {
      font-size: 1rem;
      color: #ccc;
    }

    .projects-section {
      padding: 80px 10%;
    }

    .projects-section h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      text-align: center;
      color: #ffcc70;
    }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .project-card {
      background-color: #1a1a1a;
      border: 1px solid #333;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
    }

    .project-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(255, 204, 112, 0.3);
    }

    .project-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h3 {
      margin: 0 0 10px;
      color: #ffcc70;
    }

    .card-content p {
      font-size: 0.9rem;
      color: #ccc;
    }

    .contact-section {
      background-color: #111;
      text-align: center;
      padding: 80px 10%;
    }

    .contact-section h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      color: #ffcc70;
    }

    .contact-section p {
      font-size: 1rem;
      color: #ccc;
      margin-bottom: 10px;
    }

    .contact-section a {
      color: #ffcc70;
      text-decoration: none;
    }

    .contact-section a:hover {
      text-decoration: underline;
    }

    .person-section {
      padding: 100px 20px;
      min-height: 100vh;
      background-color: #1a1a1a;
      text-align: center;
    }

    .person-section:nth-child(even) {
      background-color: #111;
    }

    .person-section h2 {
      color: #ffcc70;
      margin-bottom: 20px;
    }

    .person-section img {
      width: 150px;
      border-radius: 10px;
      margin-top: 20px;
    }

    .about-box h2 {
      color: #ffcc70;
      margin-top: 40px;
    }

    .skills-icons {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
      justify-content: center;
    }

    .skills-icons img {
      width: 40px;
      height: 40px;
      filter: brightness(0) invert(1);
      transition: transform 0.3s ease;
    }

    .skills-icons img:hover {
      transform: scale(1.2);
    }
  </style>
</head>
<body>
  <div id="root"></div>

  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

  <script type="text/babel">
    function App() {
      const images = [
        { src: "img/Shaun Russelle Obsenares.jpg", name: "Shaun Russelle Obsenares" },
        { src: "img/Kate Justine Pades.jpg", name: "Kate Justine Pades" },
        { src: "img/Cristel Nicole Vergara.jpg", name: "Cristel Nicole Vergara" },
        { src: "img/Cherly Vic Bakilid.jpg", name: "Cherly Vic Bakilid" },
        { src: "img/Jhon Mark Morales.jpg", name: "Jhon Mark Morales" },
      ];

      const projects = [
        { title: "UYY BINALOT", desc: "A POS system designed for restaurants...", img: "img/binalot.png", link: "Binalots/Binalots/home.php" },
        { title: "KJE PRINTING", desc: "A web app for home-based printing...", img: "img/kje.jpg", link: "Kje/admin/index.php" },
        { title: "Mobile App", desc: "A mobile app using React Native and Expo.", img: "project3.jpg", link: "#" }
      ];

      const profiles = {
        "Shaun Russelle Obsenares": {
          education: ["BS in Information Technology - Cavite State University- Imus Campus", "2022 - Present"],
          skills: ["photoshop.png", "java.png", "php.png"],
          resume: "resume/shaun.pdf"
        },
        "Kate Justine Pades": {
          education: ["BS in Information Technology - Cavite State University- Imus Campus", "2022 - Present"],
          skills: ["illustrator.png", "blender.png"],
          resume: "resume/kate.pdf"
        },
        "Cristel Nicole Vergara": {
          education: ["BS in Information Technology - Cavite State University- Imus Campus", "2022 - Present"],
          skills: ["typescript.png", "nextjs.png"],
          resume: "resume/cristel.pdf"
        },
        "Cherly Vic Bakilid": {
          education: ["BS in Information Technology - Cavite State University- Imus Campus", "2022 - Present"],
          skills: ["laravel.png", "mysql.png"],
          resume: "resume/che.pdf"
        },
        "Jhon Mark Morales": {
          education: ["BS in Information Technology - Cavite State University- Imus Campus", "2022 - Present"],
          skills: ["threejs.png", "php.png"],
          resume: "resume/jm.pdf"
        }
      };

      const getIdFromName = (name) => name.toLowerCase().replace(/\s+/g, '-');

      return (
        <div>
          <nav>
            <ul>
              <li><a href="#about">About</a></li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>

          <div className="main-content">
            <h1>PORTFOLIO</h1>
            <div className="frames-row">
              {images.map((img, index) => (
                <div key={index} className="frame-container">
                  <a href={`#${getIdFromName(img.name)}`} className="frame-name">
                    <div className="string"></div>
                    <div className="frame">
                      <img src={img.src} alt={img.name} />
                    </div>
                    <div className="frame-name">{img.name}</div>
                  </a>
                </div>
              ))}
            </div>
          </div>

          <section id="about" className="about-section">
            <h2>About Us</h2>
            <p>Welcome to our portfolio!</p>
          </section>

          <section id="projects" className="projects-section">
            <h2>Projects</h2>
            <div className="projects-grid">
              {projects.map((project, index) => (
                <div key={index} className="project-card">
                  <a
                    href={project.link}
                    target="_blank"
                    rel="noopener noreferrer"
                    style={{
                      position: "absolute",
                      top: 0,
                      left: 0,
                      width: "100%",
                      height: "100%",
                      opacity: 0,
                      zIndex: 1,
                    }}
                  ></a>
                  <img src={project.img} alt={project.title} />
                  <div className="card-content">
                    <h3>{project.title}</h3>
                    <p>{project.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </section>

          {Object.keys(profiles).map((profile, index) => (
            <section key={index} id={getIdFromName(profile)} className="person-section">
            <h2>{profile.charAt(0).toUpperCase() + profile.slice(1)}</h2>
                        {}
                        <img src={`img/${profile}.jpg`} alt={profile} style={{ width: '150px', borderRadius: '10px', marginTop: '20px' }} />
                        <div className="about-box">
                        <h2>Education</h2>
                        <ul>  
                            {profiles[profile].education.map((edu, i) => <li key={i}>{edu}</li>)}
                        </ul>
                        <h2>Technical Skills</h2>
                           <div className="skills-icons">
                              {profiles[profile].skills.map((skill, i) => (
                                <img key={i} src={skill} alt={`Skill ${i}`} />
                               ))}
                               </div>
                              {profiles[profile].resume && (
                               <div style={{ marginTop: '20px' }}>
                              <a href={profiles[profile].resume}
                              target="_blank"
                              rel="noopener noreferrer"
                              style={{
                              color: '#ffcc70',
                              textDecoration: 'none',
                              fontWeight: 'bold'
                              }}
                                   >
                             📄 View Resume
                              </a>
         </div>
              )}
        </div>
        </section>
        ))}


          <section id="contact" className="contact-section">
            <h2>Contact</h2>
            <p>Email: <a href="mailto:ic.admin@cvsu.edu.ph">ic.admin@cvsu.edu.ph</a></p>
            <p>Phone: <a href="tel:+12364370">0912345678</a></p>
            <p>Follow us on <a href="#">LinkedIn</a> | <a href="#">GitHub</a></p>
          </section>
        </div>
      );
    }

    ReactDOM.render(<App />, document.getElementById("root"));
  </script>
</body>
</html>
