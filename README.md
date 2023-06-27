## API References

<details>
    <summary>🔹 /api/users </summary>
    <br />

| Method   | Summary             | Responses | Reject responses | Content (application/json) |
|----------|---------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                     |           | 405              |                            |
| `GET`    | Get a list of users | 200       | 400, 401, 404    | A list of user objects     |
| `PUT`    |                     |           | 405              |                            |
| `DELETE` |                     |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/users/login </summary>
    <br />


| Method   | Summary                 | Responses | Reject responses | Content (application/json) |
|----------|-------------------------|:---------:|:----------------:|----------------------------|
| `POST`   | Send connection payload | 201       | 400, 401         | Connection data            |
| `GET`    |                         |           | 405              |                            |
| `PUT`    |                         |           | 405              |                            |
| `DELETE` |                         |           | 405              |                            |
</details>


<details>
    <summary>🔹 /api/sections </summary>
    <br />

| Method   | Summary                | Responses | Reject responses | Content (application/json) |
|----------|------------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                        |           | 405              |                            |
| `GET`    | Get a list of sections | 200       | 400, 401, 404    | A list of section objects  |
| `PUT`    |                        |           | 405              |                            |
| `DELETE` |                        |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/hero </summary>
    <br />

| Method   | Summary          | Responses | Reject responses | Content (application/json) |
|----------|------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                  |           | 405              |                            |
| `GET`    | Get hero data    | 200       | 400, 401, 404    | Hero object                |
| `PUT`    | Update hero data | 200       | 400, 401, 404    |                            |
| `DELETE` |                  |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/offers </summary>
    <br />

| Method   | Summary              | Responses | Reject responses | Content (application/json) |
|----------|----------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                      |           | 405              |                            |
| `GET`    | Get a list of offers | 200       | 400, 401, 404    | A list of offer objects    |
| `PUT`    |                      |           | 405              |                            |
| `DELETE` |                      |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/offer </summary>
    <br />

| Method   | Summary            | Responses | Reject responses | Content (application/json) |
|----------|--------------------|:---------:|:----------------:|----------------------------|
| `POST`   | Create a new offer | 201       | 400, 401         | A offer object             |
| `GET`    |                    |           | 405              |                            |
| `PUT`    |                    |           | 405              |                            |
| `DELETE` |                    |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/offer/{id} </summary>
    <br />

| Method   | Summary                  | Responses | Reject responses | Content (application/json) |
|----------|--------------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                          |           | 405              |                            |
| `GET`    | Get a offer by its id    | 200       | 400, 401, 404    | a offer object             |
| `PUT`    | Modify a offer by its id | 200       | 400, 401, 404    | a offer object             |
| `DELETE` | Delete a offer by its id | 204       | 400, 401, 404    |                            |
</details>

<details>
    <summary>🔹 /api/advantages </summary>
    <br />

| Method   | Summary                  | Responses | Reject responses | Content (application/json)  |
|----------|--------------------------|:---------:|:----------------:|-----------------------------|
| `POST`   |                          |           | 405              |                             |
| `GET`    | Get a list of advantages | 200       | 400, 401, 404    | a list of advantage objects |
| `PUT`    |                          |           | 405              |                             |
| `DELETE` |                          |           | 405              |                             |
</details>

<details>
    <summary>🔹 /api/advantage </summary>
    <br />

| Method   | Summary                | Responses | Reject responses | Content (application/json) |
|----------|------------------------|:---------:|:----------------:|----------------------------|
| `POST`   | Create a new advantage | 201       | 400, 401         | a advantage object         |
| `GET`    |                        |           | 405              |                            |
| `PUT`    |                        |           | 405              |                            |
| `DELETE` |                        |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/advantage/{id} </summary>
    <br />

| Method   | Summary                      | Responses | Reject responses | Content (application/json) |
|----------|------------------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                              |           | 405              |                            |
| `GET`    | Get a advantage by its id    | 200       | 400, 401, 404    | a advantage object         |
| `PUT`    | Modify a advantage by its id | 200       | 400, 401, 404    | a advantage object         |
| `DELETE` | Delete a advantage by its id | 204       | 400, 401, 404    |                            |
</details>

<details>
    <summary>🔹 /api/news </summary>
    <br />

| Method   | Summary            | Responses | Reject responses | Content (application/json) |
|----------|--------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                    |           | 405              |                            |
| `GET`    | Get a list of news | 200       | 400, 401, 404    | a list of new objects      |
| `PUT`    |                    |           | 405              |                            |
| `DELETE` |                    |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/new </summary>
    <br />

| Method   | Summary          | Responses | Reject responses | Content (application/json) |
|----------|------------------|:---------:|:----------------:|----------------------------|
| `POST`   | Create a new new | 201       | 400, 401         | a new object               |
| `GET`    |                  |           | 405              |                            |
| `PUT`    |                  |           | 405              |                            |
| `DELETE` |                  |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/new/{id} </summary>
    <br />

| Method   | Summary                | Responses | Reject responses | Content (application/json) |
|----------|------------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                        |           | 405              |                            |
| `GET`    | Get a new by its id    | 200       | 400, 401, 404    | a new object               |
| `PUT`    | Modify a new by its id | 200       | 400, 401, 404    | a new object               |
| `DELETE` | Delete a new by its id | 204       | 400, 401, 404    |                            |
</details>

<details>
    <summary>🔹 /api/video </summary>
    <br />

| Method   | Summary           | Responses | Reject responses | Content (application/json) |
|----------|-------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                   |           | 405              |                            |
| `GET`    | Get video data    | 200       | 400, 401, 404    | video object               |
| `PUT`    | Update video data | 200       | 400, 401, 404    |                            |
| `DELETE` |                   |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/reviews </summary>
    <br />

| Method   | Summary               | Responses | Reject responses | Content (application/json) |
|----------|-----------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                       |           | 405              |                            |
| `GET`    | Get a list of reviews | 200       | 400, 401, 404    | a list of review objects   |
| `PUT`    |                       |           | 405              |                            |
| `DELETE` |                       |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/review </summary>
    <br />

| Method   | Summary             | Responses | Reject responses | Content (application/json) |
|----------|---------------------|:---------:|:----------------:|----------------------------|
| `POST`   | Create a new review | 201       | 400, 401         | a review object            |
| `GET`    |                     |           | 405              |                            |
| `PUT`    |                     |           | 405              |                            |
| `DELETE` |                     |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/review/{id} </summary>
    <br />

| Method   | Summary                   | Responses | Reject responses | Content (application/json) |
|----------|---------------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                           |           | 405              |                            |
| `GET`    | Get a review by its id    | 200       | 400, 401, 404    | a review object            |
| `PUT`    | Modify a review by its id | 200       | 400, 401, 404    | a review object            |
| `DELETE` | Delete a review by its id | 204       | 400, 401, 404    |                            |
</details>

<details>
    <summary>🔹 /api/footers </summary>
    <br />

| Method   | Summary               | Responses | Reject responses | Content (application/json) |
|----------|-----------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                       |           | 405              |                            |
| `GET`    | Get a list of footers | 200       | 400, 401, 404    | a list of footer objects   |
| `PUT`    |                       |           | 405              |                            |
| `DELETE` |                       |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/footer </summary>
    <br />

| Method   | Summary                | Responses | Reject responses | Content (application/json) |
|----------|------------------------|:---------:|:----------------:|----------------------------|
| `POST`   | Create a footer column | 201       | 400, 401         | a footer column object     |
| `GET`    |                        |           | 405              |                            |
| `PUT`    |                        |           | 405              |                            |
| `DELETE` |                        |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/footer/{id} </summary>
    <br />

| Method   | Summary                   | Responses | Reject responses | Content (application/json) |
|----------|---------------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                           |           | 405              |                            |
| `GET`    | Get a footer by its id    | 200       | 400, 401, 404    | a footer object            |
| `PUT`    | Modify a footer by its id | 200       | 400, 401, 404    | a footer object            |
| `DELETE` | Delete a footer by its id | 204       | 400, 401, 404    |                            |
</details>

<details>
    <summary>🔹 /api/room-types </summary>
    <br />

| Method   | Summary                  | Responses | Reject responses | Content (application/json)  |
|----------|--------------------------|:---------:|:----------------:|-----------------------------|
| `POST`   |                          |           | 405              |                             |
| `GET`    | Get a list of room-types | 200       | 400, 401, 404    | a list of room-type objects |
| `PUT`    |                          |           | 405              |                             |
| `DELETE` |                          |           | 405              |                             |
</details>

<details>
    <summary>🔹 /api/links </summary>
    <br />

| Method   | Summary             | Responses | Reject responses | Content (application/json) |
|----------|---------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                     |           | 405              |                            |
| `GET`    | Get a list of links | 200       | 400, 401, 404    | a list of link objects     |
| `PUT`    |                     |           | 405              |                            |
| `DELETE` |                     |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/link </summary>
    <br />

| Method   | Summary           | Responses | Reject responses | Content (application/json) |
|----------|-------------------|:---------:|:----------------:|----------------------------|
| `POST`   | Create a new link | 201       | 400, 401         | a link object              |
| `GET`    |                   |           | 405              |                            |
| `PUT`    |                   |           | 405              |                            |
| `DELETE` |                   |           | 405              |                            |
</details>

<details>
    <summary>🔹 /api/link/{id} </summary>
    <br />

| Method   | Summary                 | Responses | Reject responses | Content (application/json) |
|----------|-------------------------|:---------:|:----------------:|----------------------------|
| `POST`   |                         |           | 405              |                            |
| `GET`    | Get a link by its id    | 200       | 400, 401, 404    | a link object              |
| `PUT`    | Modify a link by its id | 200       | 400, 401, 404    | a link object              |
| `DELETE` | Delete a link by its id | 204       | 400, 401, 404    |                            |
</details>
