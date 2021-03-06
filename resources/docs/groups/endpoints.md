# Endpoints


## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>


## PURPOSE : Get All teams
METHOD: GET
PARAMS: none
URL : /api/teams




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/teams" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/teams"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (201):

```json
{
    "status": true,
    "data": [
        {
            "id": 1,
            "name": "Miss Ettie Klein",
            "logo_url": "https:\/\/via.placeholder.com\/100x100.png\/004466?text=rerum",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "name": "Prof. Casey Osinski",
            "logo_url": "https:\/\/via.placeholder.com\/100x100.png\/0066dd?text=voluptas",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "name": "Evangeline Bergnaum",
            "logo_url": "https:\/\/via.placeholder.com\/100x100.png\/003300?text=reiciendis",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "name": "Erich Mertz",
            "logo_url": "https:\/\/via.placeholder.com\/100x100.png\/0011aa?text=officia",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 5,
            "name": "Katheryn Leannon",
            "logo_url": "https:\/\/via.placeholder.com\/100x100.png\/001155?text=voluptas",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 6,
            "name": "Moriah Langosh",
            "logo_url": "https:\/\/via.placeholder.com\/100x100.png\/0055ff?text=a",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 7,
            "name": "Cielo Cremin",
            "logo_url": "https:\/\/via.placeholder.com\/100x100.png\/00aacc?text=qui",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 8,
            "name": "Vidal Schoen",
            "logo_url": "https:\/\/via.placeholder.com\/100x100.png\/002266?text=quia",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 9,
            "name": "Brendan Miller",
            "logo_url": "https:\/\/via.placeholder.com\/100x100.png\/00aa88?text=dolor",
            "created_at": null,
            "updated_at": null
        }
    ],
    "message": "Teams List Found"
}
```
<div id="execution-results-GETapi-teams" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-teams"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-teams"></code></pre>
</div>
<div id="execution-error-GETapi-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-teams"></code></pre>
</div>
<form id="form-GETapi-teams" data-method="GET" data-path="api/teams" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-teams', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-teams" onclick="tryItOut('GETapi-teams');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-teams" onclick="cancelTryOut('GETapi-teams');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-teams" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/teams</code></b>
</p>
</form>


## PURPOSE: Get All player by team_id
METHOD: GET
PARAMS: team_id
URL: /api/team/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/team/quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/team/quis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "status": false,
    "data": null,
    "message": "No Teams Found"
}
```
<div id="execution-results-GETapi-team--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-team--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-team--id-"></code></pre>
</div>
<div id="execution-error-GETapi-team--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-team--id-"></code></pre>
</div>
<form id="form-GETapi-team--id-" data-method="GET" data-path="api/team/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-team--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-team--id-" onclick="tryItOut('GETapi-team--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-team--id-" onclick="cancelTryOut('GETapi-team--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-team--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/team/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-team--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## PURPOSE : Player details with team
METHOD: GET
PARAMS : player_id
URL : /api/player/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/player/fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/player/fugiat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "status": false,
    "data": null,
    "message": "No Players Found"
}
```
<div id="execution-results-GETapi-player--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-player--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-player--id-"></code></pre>
</div>
<div id="execution-error-GETapi-player--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-player--id-"></code></pre>
</div>
<form id="form-GETapi-player--id-" data-method="GET" data-path="api/player/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-player--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-player--id-" onclick="tryItOut('GETapi-player--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-player--id-" onclick="cancelTryOut('GETapi-player--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-player--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/player/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-player--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## PURPOSE : Get All players
METHOD: GET
PARAMS: none
URL : /api/players




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/players" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/players"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (201):

```json
{
    "status": true,
    "data": [
        {
            "id": 10,
            "first_name": "Carter",
            "last_name": "Hahn",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/002200?text=eos",
            "team_id": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 12,
            "first_name": "Jaycee",
            "last_name": "Labadie",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/008800?text=et",
            "team_id": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 22,
            "first_name": "Titus",
            "last_name": "Emard",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0066bb?text=aut",
            "team_id": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "first_name": "Jocelynsaas",
            "last_name": "Stoke",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00ee33?text=ex",
            "team_id": 2,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 8,
            "first_name": "Wellington",
            "last_name": "Paucek",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00aa88?text=ratione",
            "team_id": 2,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 19,
            "first_name": "Eugenia",
            "last_name": "Brown",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00ccff?text=dolor",
            "team_id": 2,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 25,
            "first_name": "Lorna",
            "last_name": "Glover",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/008855?text=ut",
            "team_id": 2,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 36,
            "first_name": "Vickie",
            "last_name": "Crist",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00ffbb?text=quia",
            "team_id": 2,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 38,
            "first_name": "Belle",
            "last_name": "Muller",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/006633?text=nam",
            "team_id": 2,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 49,
            "first_name": "Catharine",
            "last_name": "Kulas",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/003300?text=in",
            "team_id": 2,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "first_name": "Maymie",
            "last_name": "Buckridge",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00aa00?text=aspernatur",
            "team_id": 3,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 11,
            "first_name": "Cassandra",
            "last_name": "Tremblay",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00ff44?text=nulla",
            "team_id": 3,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 13,
            "first_name": "German",
            "last_name": "Friesen",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/003311?text=et",
            "team_id": 3,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 24,
            "first_name": "Ramon",
            "last_name": "Donnelly",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00aa22?text=sit",
            "team_id": 3,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 35,
            "first_name": "Enrique",
            "last_name": "Russel",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/006655?text=harum",
            "team_id": 3,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 9,
            "first_name": "Raymond",
            "last_name": "Ebert",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0088cc?text=occaecati",
            "team_id": 4,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 27,
            "first_name": "Oleta",
            "last_name": "Heathcote",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/001155?text=adipisci",
            "team_id": 4,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 34,
            "first_name": "Maia",
            "last_name": "Gleason",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00cc22?text=quod",
            "team_id": 4,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 1,
            "first_name": "Viviane",
            "last_name": "Douglas",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0033cc?text=cumque",
            "team_id": 5,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 5,
            "first_name": "Maiya",
            "last_name": "Schuppe",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/003366?text=numquam",
            "team_id": 5,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 18,
            "first_name": "Gudrun",
            "last_name": "Walter",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/009955?text=magni",
            "team_id": 5,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 30,
            "first_name": "Kyla",
            "last_name": "Kovacek",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0000ff?text=maiores",
            "team_id": 5,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 31,
            "first_name": "Fiona",
            "last_name": "Predovic",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/008877?text=ratione",
            "team_id": 5,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 45,
            "first_name": "Dorothea",
            "last_name": "Jakubowski",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0033ee?text=cupiditate",
            "team_id": 5,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 7,
            "first_name": "Seth",
            "last_name": "Beatty",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0000ee?text=incidunt",
            "team_id": 6,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 15,
            "first_name": "Mohammad",
            "last_name": "Smith",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00cc55?text=suscipit",
            "team_id": 6,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 23,
            "first_name": "Myron",
            "last_name": "Terry",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/002288?text=fuga",
            "team_id": 6,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 26,
            "first_name": "Stacey",
            "last_name": "Stark",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00aaff?text=architecto",
            "team_id": 6,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 28,
            "first_name": "Stanton",
            "last_name": "Funk",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0099aa?text=maxime",
            "team_id": 6,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 50,
            "first_name": "Theresia",
            "last_name": "Wilkinson",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/000033?text=et",
            "team_id": 6,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 16,
            "first_name": "Wanda",
            "last_name": "Haley",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0033ee?text=est",
            "team_id": 7,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 43,
            "first_name": "Felton",
            "last_name": "Legros",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/008877?text=accusamus",
            "team_id": 7,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 14,
            "first_name": "Alexanne",
            "last_name": "Vandervort",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/004433?text=alias",
            "team_id": 8,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 20,
            "first_name": "Precious",
            "last_name": "Stracke",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0088ee?text=vel",
            "team_id": 8,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 32,
            "first_name": "Beverly",
            "last_name": "Monahan",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/007788?text=expedita",
            "team_id": 8,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 37,
            "first_name": "Alvera",
            "last_name": "Miller",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0044aa?text=et",
            "team_id": 8,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 42,
            "first_name": "Kianna",
            "last_name": "Upton",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00ee22?text=sequi",
            "team_id": 8,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 44,
            "first_name": "Lowell",
            "last_name": "Bogan",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00ffaa?text=tempora",
            "team_id": 8,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 47,
            "first_name": "Mae",
            "last_name": "Glover",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/005533?text=inventore",
            "team_id": 8,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 48,
            "first_name": "Brionna",
            "last_name": "Herman",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00aacc?text=et",
            "team_id": 8,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "first_name": "Omari",
            "last_name": "Barton",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/005533?text=est",
            "team_id": 9,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 21,
            "first_name": "Susan",
            "last_name": "Schneider",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/008833?text=excepturi",
            "team_id": 9,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 33,
            "first_name": "Ivory",
            "last_name": "Treutel",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/002277?text=earum",
            "team_id": 9,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 40,
            "first_name": "Reyes",
            "last_name": "Prohaska",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/0044ee?text=qui",
            "team_id": 9,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 46,
            "first_name": "Annabelle",
            "last_name": "Walsh",
            "player_image_url": "https:\/\/via.placeholder.com\/100x100.png\/00bb22?text=dolores",
            "team_id": 9,
            "created_at": null,
            "updated_at": null
        }
    ],
    "message": "Players List Found"
}
```
<div id="execution-results-GETapi-players" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-players"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-players"></code></pre>
</div>
<div id="execution-error-GETapi-players" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-players"></code></pre>
</div>
<form id="form-GETapi-players" data-method="GET" data-path="api/players" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-players', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-players" onclick="tryItOut('GETapi-players');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-players" onclick="cancelTryOut('GETapi-players');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-players" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/players</code></b>
</p>
</form>


## PURPOSE : Add Team
METHOD: POST
HEADERS: S-TOKEN
PARAMS: team_name, team_logo
URL : /api/add/team




> Example request:

```bash
curl -X POST \
    "http://localhost/api/add/team" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/add/team"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-add-team" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-add-team"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-add-team"></code></pre>
</div>
<div id="execution-error-POSTapi-add-team" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-add-team"></code></pre>
</div>
<form id="form-POSTapi-add-team" data-method="POST" data-path="api/add/team" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-add-team', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-add-team" onclick="tryItOut('POSTapi-add-team');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-add-team" onclick="cancelTryOut('POSTapi-add-team');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-add-team" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/add/team</code></b>
</p>
</form>


## PURPOSE : Update
METHOD: POST
HEADERS: S-TOKEN
PARAMS: id, team_name, team_logo
URL : /api/edit/team




> Example request:

```bash
curl -X POST \
    "http://localhost/api/edit/team" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/edit/team"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-edit-team" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-edit-team"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-edit-team"></code></pre>
</div>
<div id="execution-error-POSTapi-edit-team" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-edit-team"></code></pre>
</div>
<form id="form-POSTapi-edit-team" data-method="POST" data-path="api/edit/team" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-edit-team', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-edit-team" onclick="tryItOut('POSTapi-edit-team');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-edit-team" onclick="cancelTryOut('POSTapi-edit-team');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-edit-team" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/edit/team</code></b>
</p>
</form>


## PURPOSE : Delete tean
METHOD: POST
HEADERS: S-TOKEN
PARAMS: team_id
URL : /api/delete/team




> Example request:

```bash
curl -X POST \
    "http://localhost/api/delete/team" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete/team"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-delete-team" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-delete-team"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delete-team"></code></pre>
</div>
<div id="execution-error-POSTapi-delete-team" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delete-team"></code></pre>
</div>
<form id="form-POSTapi-delete-team" data-method="POST" data-path="api/delete/team" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-delete-team', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-delete-team" onclick="tryItOut('POSTapi-delete-team');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-delete-team" onclick="cancelTryOut('POSTapi-delete-team');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-delete-team" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/delete/team</code></b>
</p>
</form>


## PURPOSE : Get team details
METHOD: GET
HEADERS: S-TOKEN
PARAMS: none
URL : /api/team-details/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/team-details/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/team-details/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "status": false,
    "data": null,
    "message": "Invalid Api Key"
}
```
<div id="execution-results-GETapi-team-details--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-team-details--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-team-details--id-"></code></pre>
</div>
<div id="execution-error-GETapi-team-details--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-team-details--id-"></code></pre>
</div>
<form id="form-GETapi-team-details--id-" data-method="GET" data-path="api/team-details/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-team-details--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-team-details--id-" onclick="tryItOut('GETapi-team-details--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-team-details--id-" onclick="cancelTryOut('GETapi-team-details--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-team-details--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/team-details/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-team-details--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## PURPOSE : Add Player
METHOD: POST
HEADERS: S-TOKEN
PARAMS: first_name, last_name, player_image_url, team_id
URL : /api/add/player




> Example request:

```bash
curl -X POST \
    "http://localhost/api/add/player" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/add/player"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-add-player" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-add-player"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-add-player"></code></pre>
</div>
<div id="execution-error-POSTapi-add-player" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-add-player"></code></pre>
</div>
<form id="form-POSTapi-add-player" data-method="POST" data-path="api/add/player" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-add-player', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-add-player" onclick="tryItOut('POSTapi-add-player');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-add-player" onclick="cancelTryOut('POSTapi-add-player');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-add-player" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/add/player</code></b>
</p>
</form>


## PURPOSE : Update Player
METHOD: POST
HEADERS: S-TOKEN
PARAMS: player_id, first_name, last_name, player_image_url, team_id
URL : /api/edit/player




> Example request:

```bash
curl -X POST \
    "http://localhost/api/edit/player" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/edit/player"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-edit-player" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-edit-player"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-edit-player"></code></pre>
</div>
<div id="execution-error-POSTapi-edit-player" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-edit-player"></code></pre>
</div>
<form id="form-POSTapi-edit-player" data-method="POST" data-path="api/edit/player" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-edit-player', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-edit-player" onclick="tryItOut('POSTapi-edit-player');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-edit-player" onclick="cancelTryOut('POSTapi-edit-player');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-edit-player" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/edit/player</code></b>
</p>
</form>


## PURPOSE : Delete Player
METHOD: POST
HEADERS: S-TOKEN
PARAMS: player_id
URL : /api/delete/player




> Example request:

```bash
curl -X POST \
    "http://localhost/api/delete/player" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete/player"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-delete-player" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-delete-player"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-delete-player"></code></pre>
</div>
<div id="execution-error-POSTapi-delete-player" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-delete-player"></code></pre>
</div>
<form id="form-POSTapi-delete-player" data-method="POST" data-path="api/delete/player" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-delete-player', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-delete-player" onclick="tryItOut('POSTapi-delete-player');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-delete-player" onclick="cancelTryOut('POSTapi-delete-player');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-delete-player" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/delete/player</code></b>
</p>
</form>


## Show the application&#039;s login form.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Fj0GXjbg3Wt5FXIpPtCalwXZRsy5SYSGha1fqKqo">

    <title>Soccer-Team-Management</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>
    <script src="http://localhost/js/custom.js" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
    <link href="http://localhost/css/custom.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://localhost">
                    Soccer-Team-Management
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/login">Login</a>
                                </li>
                            
                                                                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="http://localhost/login">
                        <input type="hidden" name="_token" value="Fj0GXjbg3Wt5FXIpPtCalwXZRsy5SYSGha1fqKqo">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" >

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                                                    <a class="btn btn-link" href="http://localhost/password/reset">
                                        Forgot Your Password?
                                    </a>
                                                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>

```
<div id="execution-results-GETlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETlogin"></code></pre>
</div>
<div id="execution-error-GETlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogin"></code></pre>
</div>
<form id="form-GETlogin" data-method="GET" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETlogin" onclick="tryItOut('GETlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETlogin" onclick="cancelTryOut('GETlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>login</code></b>
</p>
</form>


## Handle a login request to the application.




> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"></code></pre>
</div>
<div id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin"></code></pre>
</div>
<form id="form-POSTlogin" data-method="POST" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogin" onclick="tryItOut('POSTlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogin" onclick="cancelTryOut('POSTlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>login</code></b>
</p>
</form>


## Log the user out of the application.




> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTlogout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogout"></code></pre>
</div>
<div id="execution-error-POSTlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogout"></code></pre>
</div>
<form id="form-POSTlogout" data-method="POST" data-path="logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogout" onclick="tryItOut('POSTlogout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogout" onclick="cancelTryOut('POSTlogout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>logout</code></b>
</p>
</form>


## Display the form to request a password reset link.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Fj0GXjbg3Wt5FXIpPtCalwXZRsy5SYSGha1fqKqo">

    <title>Soccer-Team-Management</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>
    <script src="http://localhost/js/custom.js" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
    <link href="http://localhost/css/custom.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://localhost">
                    Soccer-Team-Management
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/login">Login</a>
                                </li>
                            
                                                                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset Password</div>

                <div class="card-body">
                    
                    <form method="POST" action="http://localhost/password/email">
                        <input type="hidden" name="_token" value="Fj0GXjbg3Wt5FXIpPtCalwXZRsy5SYSGha1fqKqo">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                                                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>

```
<div id="execution-results-GETpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset"></code></pre>
</div>
<div id="execution-error-GETpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset"></code></pre>
</div>
<form id="form-GETpassword-reset" data-method="GET" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset" onclick="tryItOut('GETpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset" onclick="cancelTryOut('GETpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset</code></b>
</p>
</form>


## Send a reset link to the given user.




> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpassword-email" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-email"></code></pre>
</div>
<div id="execution-error-POSTpassword-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-email"></code></pre>
</div>
<form id="form-POSTpassword-email" data-method="POST" data-path="password/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-email" onclick="tryItOut('POSTpassword-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-email" onclick="cancelTryOut('POSTpassword-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/email</code></b>
</p>
</form>


## Display the password reset view for the given token.


If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/omnis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Fj0GXjbg3Wt5FXIpPtCalwXZRsy5SYSGha1fqKqo">

    <title>Soccer-Team-Management</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>
    <script src="http://localhost/js/custom.js" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
    <link href="http://localhost/css/custom.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://localhost">
                    Soccer-Team-Management
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/login">Login</a>
                                </li>
                            
                                                                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset Password</div>

                <div class="card-body">
                    <form method="POST" action="http://localhost/password/reset">
                        <input type="hidden" name="_token" value="Fj0GXjbg3Wt5FXIpPtCalwXZRsy5SYSGha1fqKqo">
                        <input type="hidden" name="token" value="omnis">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">

                                                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>

```
<div id="execution-results-GETpassword-reset--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset--token-"></code></pre>
</div>
<div id="execution-error-GETpassword-reset--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset--token-"></code></pre>
</div>
<form id="form-GETpassword-reset--token-" data-method="GET" data-path="password/reset/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset--token-" onclick="tryItOut('GETpassword-reset--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset--token-" onclick="cancelTryOut('GETpassword-reset--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset/{token}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETpassword-reset--token-" data-component="url" required  hidden>
<br>

</p>
</form>


## Reset the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-reset"></code></pre>
</div>
<div id="execution-error-POSTpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-reset"></code></pre>
</div>
<form id="form-POSTpassword-reset" data-method="POST" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-reset" onclick="tryItOut('POSTpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-reset" onclick="cancelTryOut('POSTpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/reset</code></b>
</p>
</form>


## Display the password confirmation view.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-confirm"></code></pre>
</div>
<div id="execution-error-GETpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-confirm"></code></pre>
</div>
<form id="form-GETpassword-confirm" data-method="GET" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-confirm" onclick="tryItOut('GETpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-confirm" onclick="cancelTryOut('GETpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/confirm</code></b>
</p>
</form>


## Confirm the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-confirm"></code></pre>
</div>
<div id="execution-error-POSTpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-confirm"></code></pre>
</div>
<form id="form-POSTpassword-confirm" data-method="POST" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-confirm" onclick="tryItOut('POSTpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-confirm" onclick="cancelTryOut('POSTpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/confirm</code></b>
</p>
</form>


## Display a listing of the teams.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Fj0GXjbg3Wt5FXIpPtCalwXZRsy5SYSGha1fqKqo">

    <title>Soccer-Team-Management</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>
    <script src="http://localhost/js/custom.js" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
    <link href="http://localhost/css/custom.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://localhost">
                    Soccer-Team-Management
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/login">Login</a>
                                </li>
                            
                                                                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Team Listing</div>
                        <div class="panel-body">
                                                                                            <div class="card col-md-3" style="padding: 10px;">
                                    <img class="card-img-top" src="https://via.placeholder.com/100x100.png/004466?text=rerum" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Miss Ettie Klein</h4>
                                        <a href="http://localhost/team/1/players" class="btn btn-primary">View player(s)</a>
                                    </div>
                                </div>
                                                                <div class="card col-md-3" style="padding: 10px;">
                                    <img class="card-img-top" src="https://via.placeholder.com/100x100.png/0066dd?text=voluptas" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Prof. Casey Osinski</h4>
                                        <a href="http://localhost/team/2/players" class="btn btn-primary">View player(s)</a>
                                    </div>
                                </div>
                                                                <div class="card col-md-3" style="padding: 10px;">
                                    <img class="card-img-top" src="https://via.placeholder.com/100x100.png/003300?text=reiciendis" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Evangeline Bergnaum</h4>
                                        <a href="http://localhost/team/3/players" class="btn btn-primary">View player(s)</a>
                                    </div>
                                </div>
                                                                <div class="card col-md-3" style="padding: 10px;">
                                    <img class="card-img-top" src="https://via.placeholder.com/100x100.png/0011aa?text=officia" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Erich Mertz</h4>
                                        <a href="http://localhost/team/4/players" class="btn btn-primary">View player(s)</a>
                                    </div>
                                </div>
                                                                <div class="card col-md-3" style="padding: 10px;">
                                    <img class="card-img-top" src="https://via.placeholder.com/100x100.png/001155?text=voluptas" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Katheryn Leannon</h4>
                                        <a href="http://localhost/team/5/players" class="btn btn-primary">View player(s)</a>
                                    </div>
                                </div>
                                                                <div class="card col-md-3" style="padding: 10px;">
                                    <img class="card-img-top" src="https://via.placeholder.com/100x100.png/0055ff?text=a" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Moriah Langosh</h4>
                                        <a href="http://localhost/team/6/players" class="btn btn-primary">View player(s)</a>
                                    </div>
                                </div>
                                                                <div class="card col-md-3" style="padding: 10px;">
                                    <img class="card-img-top" src="https://via.placeholder.com/100x100.png/00aacc?text=qui" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Cielo Cremin</h4>
                                        <a href="http://localhost/team/7/players" class="btn btn-primary">View player(s)</a>
                                    </div>
                                </div>
                                                                <div class="card col-md-3" style="padding: 10px;">
                                    <img class="card-img-top" src="https://via.placeholder.com/100x100.png/002266?text=quia" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Vidal Schoen</h4>
                                        <a href="http://localhost/team/8/players" class="btn btn-primary">View player(s)</a>
                                    </div>
                                </div>
                                                                <div class="card col-md-3" style="padding: 10px;">
                                    <img class="card-img-top" src="https://via.placeholder.com/100x100.png/00aa88?text=dolor" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Brendan Miller</h4>
                                        <a href="http://localhost/team/9/players" class="btn btn-primary">View player(s)</a>
                                    </div>
                                </div>
                                                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## Fetch and display team&#039;s player(s)




> Example request:

```bash
curl -X GET \
    -G "http://localhost/team/fuga/players" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/team/fuga/players"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Fj0GXjbg3Wt5FXIpPtCalwXZRsy5SYSGha1fqKqo">

    <title>Soccer-Team-Management</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>
    <script src="http://localhost/js/custom.js" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
    <link href="http://localhost/css/custom.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://localhost">
                    Soccer-Team-Management
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/login">Login</a>
                                </li>
                            
                                                                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                                                <div class="panel-body">
                            <h4>Team Players</h4>
                            <hr>
                                                            <p> Unfortunately no players are added under this team. Hence, no data availale!!</p>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>

```
<div id="execution-results-GETteam--id--players" hidden>
    <blockquote>Received response<span id="execution-response-status-GETteam--id--players"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETteam--id--players"></code></pre>
</div>
<div id="execution-error-GETteam--id--players" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETteam--id--players"></code></pre>
</div>
<form id="form-GETteam--id--players" data-method="GET" data-path="team/{id}/players" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETteam--id--players', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETteam--id--players" onclick="tryItOut('GETteam--id--players');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETteam--id--players" onclick="cancelTryOut('GETteam--id--players');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETteam--id--players" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>team/{id}/players</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETteam--id--players" data-component="url" required  hidden>
<br>

</p>
</form>


## Fetch player details




> Example request:

```bash
curl -X GET \
    -G "http://localhost/player/odit/team" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/player/odit/team"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Fj0GXjbg3Wt5FXIpPtCalwXZRsy5SYSGha1fqKqo">

    <title>Soccer-Team-Management</title>

    <!-- Scripts -->
    <script src="http://localhost/js/app.js" defer></script>
    <script src="http://localhost/js/custom.js" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://localhost/css/app.css" rel="stylesheet">
    <link href="http://localhost/css/custom.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="http://localhost">
                    Soccer-Team-Management
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/login">Login</a>
                                </li>
                            
                                                                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Player Detail</h3>
                            <hr>
                                                            <p> Unfortunately no details fetched!!</p>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>

```
<div id="execution-results-GETplayer--id--team" hidden>
    <blockquote>Received response<span id="execution-response-status-GETplayer--id--team"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETplayer--id--team"></code></pre>
</div>
<div id="execution-error-GETplayer--id--team" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETplayer--id--team"></code></pre>
</div>
<form id="form-GETplayer--id--team" data-method="GET" data-path="player/{id}/team" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETplayer--id--team', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETplayer--id--team" onclick="tryItOut('GETplayer--id--team');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETplayer--id--team" onclick="cancelTryOut('GETplayer--id--team');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETplayer--id--team" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>player/{id}/team</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETplayer--id--team" data-component="url" required  hidden>
<br>

</p>
</form>


## Redirect admin root route to admin teams listing route




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin"></code></pre>
</div>
<div id="execution-error-GETadmin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin"></code></pre>
</div>
<form id="form-GETadmin" data-method="GET" data-path="admin" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin" onclick="tryItOut('GETadmin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin" onclick="cancelTryOut('GETadmin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin</code></b>
</p>
</form>


## Display team listing with CRUD functionality




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/teams" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/teams"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-teams" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-teams"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-teams"></code></pre>
</div>
<div id="execution-error-GETadmin-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-teams"></code></pre>
</div>
<form id="form-GETadmin-teams" data-method="GET" data-path="admin/teams" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-teams', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-teams" onclick="tryItOut('GETadmin-teams');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-teams" onclick="cancelTryOut('GETadmin-teams');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-teams" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/teams</code></b>
</p>
</form>


## Add team form




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/team/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/team/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-team-add" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-team-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-team-add"></code></pre>
</div>
<div id="execution-error-GETadmin-team-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-team-add"></code></pre>
</div>
<form id="form-GETadmin-team-add" data-method="GET" data-path="admin/team/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-team-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-team-add" onclick="tryItOut('GETadmin-team-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-team-add" onclick="cancelTryOut('GETadmin-team-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-team-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/team/add</code></b>
</p>
</form>


## Edit team form




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/team/soluta/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/team/soluta/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-team--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-team--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-team--id--edit"></code></pre>
</div>
<div id="execution-error-GETadmin-team--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-team--id--edit"></code></pre>
</div>
<form id="form-GETadmin-team--id--edit" data-method="GET" data-path="admin/team/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-team--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-team--id--edit" onclick="tryItOut('GETadmin-team--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-team--id--edit" onclick="cancelTryOut('GETadmin-team--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-team--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/team/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-team--id--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Display player listing with CRUD functionality




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/players" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/players"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-players" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-players"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-players"></code></pre>
</div>
<div id="execution-error-GETadmin-players" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-players"></code></pre>
</div>
<form id="form-GETadmin-players" data-method="GET" data-path="admin/players" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-players', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-players" onclick="tryItOut('GETadmin-players');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-players" onclick="cancelTryOut('GETadmin-players');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-players" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/players</code></b>
</p>
</form>


## Add player form




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/player/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/player/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-player-add" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-player-add"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-player-add"></code></pre>
</div>
<div id="execution-error-GETadmin-player-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-player-add"></code></pre>
</div>
<form id="form-GETadmin-player-add" data-method="GET" data-path="admin/player/add" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-player-add', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-player-add" onclick="tryItOut('GETadmin-player-add');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-player-add" onclick="cancelTryOut('GETadmin-player-add');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-player-add" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/player/add</code></b>
</p>
</form>


## Edit player form with content




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/player/edit/esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/player/edit/esse"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-player-edit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-player-edit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-player-edit--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-player-edit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-player-edit--id-"></code></pre>
</div>
<form id="form-GETadmin-player-edit--id-" data-method="GET" data-path="admin/player/edit/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-player-edit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-player-edit--id-" onclick="tryItOut('GETadmin-player-edit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-player-edit--id-" onclick="cancelTryOut('GETadmin-player-edit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-player-edit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/player/edit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-player-edit--id-" data-component="url" required  hidden>
<br>

</p>
</form>



