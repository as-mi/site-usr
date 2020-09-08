<?php get_header() ?>

<main>
  <div class="textbox">
    <h1 class="hero-title"><?php the_title(); ?></h1>

    <div class="content">
      <form action="/" method="POST" class="pure-form pure-form-stacked">
        <label for="nume">Nume:</label>
        <input type="text" name="nume" id="nume" class="pure-input-1">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="pure-input-1">

        <label for="subiect">Subiect:</label>
        <input type="text" name="subiect" id="subiect" class="pure-input-1">

        <label for="mesaj">Mesajul dumneavoastra:</label>
        <textarea name="mesaj" id="mesaj" cols="30" rows="6" class="pure-input-1"></textarea>

        <button type="submit">Trimite!</button>
      </form>

      <div class="contact-info">
        <div class="contact-info-locatie">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>location-pin-alt</title><g fill="#fff"><path d="M12 10.8a2 2 0 1 0-2-2 2 2 0 0 0 2 2zm-.71 6.91a1 1 0 0 0 1.42 0l4.09-4.1a6.79 6.79 0 1 0-9.6 0zM7.23 8.34a4.81 4.81 0 0 1 2.13-3.55 4.81 4.81 0 0 1 5.28 0 4.82 4.82 0 0 1 .75 7.41L12 15.59 8.61 12.2a4.77 4.77 0 0 1-1.38-3.86zM19 20H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2z"></path></g></svg>

        <p>Calea Plevnei, Nr. 61, Etaj 1, Cam. 9-10<br>Bucuresti, Romania</p>
        </div>

        <div class="contact-info-date">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>phone</title><g fill="#fff"><path d="M19.44 13c-.22 0-.45-.07-.67-.12a9.44 9.44 0 0 1-1.31-.39 2 2 0 0 0-2.48 1l-.22.45a12.18 12.18 0 0 1-2.66-2 12.18 12.18 0 0 1-2-2.66l.42-.28a2 2 0 0 0 1-2.48 10.33 10.33 0 0 1-.39-1.31c-.05-.22-.09-.45-.12-.68a3 3 0 0 0-3-2.49h-3a3 3 0 0 0-3 3.41 19 19 0 0 0 16.52 16.46h.38a3 3 0 0 0 2-.76 3 3 0 0 0 1-2.25v-3a3 3 0 0 0-2.47-2.9zm.5 6a1 1 0 0 1-.34.75 1.05 1.05 0 0 1-.82.25A17 17 0 0 1 4.07 5.22a1.09 1.09 0 0 1 .25-.82 1 1 0 0 1 .75-.34h3a1 1 0 0 1 1 .79q.06.41.15.81a11.12 11.12 0 0 0 .46 1.55l-1.4.65a1 1 0 0 0-.49 1.33 14.49 14.49 0 0 0 7 7 1 1 0 0 0 .76 0 1 1 0 0 0 .57-.52l.62-1.4a13.69 13.69 0 0 0 1.58.46q.4.09.81.15a1 1 0 0 1 .79 1z"></path></g></svg>

        <ul>
          <li>office@uniunea.ro</li>
          <li>Presedinte - Uniunea Studentilor din Romania</li>
          <li>+40 751 908 284</li>
          <li>aalex.vasile@yahoo.com</li>
        </ul>
        </div>
      </div>
    </div>
  </div>

  </main>

<?php get_footer() ?>