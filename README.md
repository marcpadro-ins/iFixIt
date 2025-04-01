# Nom del Projecte
Aquest projecte és una aplicació Laravel orientada a gestionar tutorials i guies. D'entre els requisits inicials, s'han implementat únicament els fitxers de **sitemap** i **robots**, mentre que altres millores (com URLs amigables, integració de Google Analytics/Search Console, etc.) no han estat afegides.

## Funcionalitats Implementades
- **Sitemap:**  
  Es proporciona un fitxer `sitemap.xml` per facilitar la indexació del lloc per part dels motors de cerca.
- **Robots.txt:**  
  El fitxer `robots.txt` restringeix l'accés a determinades parts del lloc (per exemple, el directori `/admin/`) i indica la ubicació del `sitemap.xml`.

## Imatges de l'Aplicació
Aquestes imatges mostren algunes de les vistes principals de l'aplicació:
- **Index:**  
  ![Index](/storage/images/index-image.png)
- **Show:**  
  ![Show](/storage/images/show-image.png)
- **Search:**  
  ![Search](/storage/images/search-image.png)

## Rutes Principals
Les rutes definides en el projecte són:
- `/` i `/tutorials` – Pàgina principal que llista els tutorials.
- `/tutorials/search` – Pàgina de cerca de tutorials.
- `/tutorials/{tutorial}` – Pàgina de detall d'un tutorial.
- `/import-ifixit` – Ruta per a la importació des d'Ifixit.

## Instal·lació
Per instal·lar el projecte localment, segueix els següents passos:
1. **Clona el repositori:**
   ```bash
   git clone https://github.com/nom-usuari/nom-del-repositori.git
   cd nom-del-repositori
   ```
2. **Instal·la les dependències:**
   ```bash
   composer install
   npm install
   npm run dev
   ```
3. **Configura l'entorn:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Executa les migracions (si és necessari):**
   ```bash
   php artisan migrate
   ```
5. **Crea l'enllaç simbòlic per a storage:**
   ```bash
   php artisan storage:link
   ```
6. **Inicia el servidor:**
   ```bash
   php artisan serve
   ```

## Notes Addicionals
Aquest projecte està dissenyat amb la idea de millorar el SEO i el rendiment, tot i que actualment només s'han afegit el `sitemap.xml` i el `robots.txt`.
Quan es disposi d'un domini real, és recomanable actualitzar les URLs base dins del sitemap i en la configuració del projecte.

## Llicència
Aquest projecte està llicenciat sota la [MIT License](LICENSE).
