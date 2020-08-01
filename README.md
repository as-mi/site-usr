# Site Uniunea Studenților din România

Pentru a rula baza de date și server-ul de PHP prin Docker:

```sh
$ docker-compose up
```

Site-ul Wordpress poate fi accesat la adresa `localhost:8080`.

## Creare Pagină Prezentare

Exemplu:

![Exemplu pagina template](https://i.ibb.co/WBmZF7f/Capture.png)

1. Se alege template-ul "Pagina Prezentare Persoana" din meniul din dreapta al editorului
2. Titlul paginii va se va găsi în secțiunea din stânga și reprezintă statutul persoanei, în exemplu "Presedinte"
3. Continutul paginii va avea urmatorul format (**în această ordine**):
   * Un paragraf, textul care apare in sectiunea din stanga
   * Una sau mai multe blocuri de imagine care vor apărea în secțiunea de "Istoric" (captionul va fi preluat si afisat sub imaginea respectiva)
   * Un bloc H2, titlul secțiunii din stânga, în exemplu "Alexandru Vasile"
   * Un paragraf, textul care apare in sectiunea din dreapta
   * Un unordered list cu 3 elemente (**în această ordine**):
     * numarul de telefon
     * adresa de email
     * profilul de Facebook



## Referințe

- [How to Create a Custom WordPress Theme](https://www.youtube.com/watch?v=-h7gOJbIpmo)
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
