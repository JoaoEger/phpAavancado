<?php

use login\Permissions;

require_once "../bot.php";

$acesso = new Permissions();
$acesso->isLogged();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area restrita</title>
</head>
<body>
    <h1>TU É DE CONFIANÇA MEU BRODI cartão clonado com sucesso</h1>
    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFRUYGBgZGhwYGhgYGBoaGBoaGBgaGhgYGBocIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjQhISs0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAPAA0gMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAAIDBAYBB//EAD0QAAIBAgQDBQYEBQMEAwAAAAECAAMRBAUSITFBUQYiYXGREzIzcoGyFFKhwSNCc5KxBxXRJGLw8RYX4f/EABoBAAMBAQEBAAAAAAAAAAAAAAECAwAEBQb/xAAiEQADAQADAAMAAwEBAAAAAAAAAQIRAxIhIjFBE1FhMgT/2gAMAwEAAhEDEQA/ALOmdInQs7Pn8Pb0ZpnN5JFA0AaYooptAImdnJTxeM0CGUEuMZwGAXzdjsBGjHE8L+sPRmD7OBxM6riZ5sQTzl3DVu7a+/KboEM3nC0EvWblEMU37wfxhwLAxQU2PYHhHrjSd9O0HRgCLRSJKoIElERrBhyzkQnbTCkcQnbRWmbCkdnDO3ivAEZETOkzkcQw2Y/FqfO33GKLMfi1Pnb7jFPQOTTeRRRTjOoU5OxQYEbacY2jnPOZ3N81O6jbqZpht4gaW8wzVUFl3MCviC+7GDmqXJlugCRtOlcalC9i7TTbrLVHD3Gw/TePwWGb3obw+GFuE2BQNwuXkAki4PrLNHLuG236w1TS1pZRBzgwbTONhGB4XHh0kQpAk24ePW81yUl6Rj4FDfabA6Zb8Jsb8eUi9g1vdNv3muGFUcpG9EdJupuxj6qMLcfSSYfHFTZuE0laiDygTMcCDcrsYlQbS4jg7iPmdwuIdGseHQw8lQEXEhctGHkxEzk7JjHDGyQxtpkYbOgTukRWh0XDC5l8ap87fcYpzMvjVPnb7jFPTw4zdxRRTiw6hRRE85QbN6QNtXpCpb+gaWcS1lJmIxdQMzecO5/jxo7huDMzTXmZfihr1i1RKtuUJYC1tzByKSbC0IYQDwuJRmQfwjDa0KU6kA0KvSXKWJiBRo8MurwltEUDfeDExYC8QI8ZnTA7xN/0MwxcxFcqt0UsR/L18p3AZilS4sVYfytsfO0GN2gorsw485YwuYYeoSUbvDhfjMYLlAY32Ig3/dArgNwO0f8A7wm4PITGLj4W8F4o09ei926CXhjrrtxIFvrKtSiE7zOFPNtrn6mYwCzjLu6dNiRvtxg7KsZY6Gv03h+o6EalYnzMB5pRBtUT3h71pO51BQYnZXwD6kBlgicmYxtETOCK0QEzXgRRRRQGMLmXxqnzt9xiizL41T52+4xT0zhN1OzqrHgTm06AF2rrlMM5U2NwL+c84o49gb3m+7dN/wBPp/Mwt9J5mk7/APzynByc9tViNvgsSlameTKNx18RA1RmY2GwEp5c5W56wgjbX53mc9X4GKdL0u01CLtxPE/tLeWox3NvrBftjwhTLXJHC3KSpFpYQva/OQo5vzkppna3+bSzQwbEd0HV5iIUKmt2IUAzRZZhUVbub+cymZHF0xcISBxIF/8AEDUczxDtoGq55biOobWiO8Z6Nj81wtFTq0jwtcmea47PT7Y1KQ0A8v3hh+xuIchndDq39+5H0kWddi6qspoKaiEAEgbhrb38JSFC+2Jbt/SJ8tzd64Ckd5d79d4Zpai56Eb+ci7PZA1DZt3PvAMFYeADTQ1cnsmoBw3E3IufSSvrvhSe2emYr9sRSGkLd0JA+nWDcN2karVFTEXNMbWA7oPIStnOQV2xBC0nIc3Fhcb9SNoUzTsS6onsjclbupNrN4SimEibdtmgOZYaqtqZH02PpBNaoQSB7vIzO4jI8Rh11jzOlgTbyEI5NXruvepHT+Yi1/IHjJ1x4tTHm9eNB7JH2deQOw84WgnK0KueNj/mFis4eRfIuhRRRSRhRRRQmMFmXxqnzt9xiizL41T52+4xT0zjN+BOiP0eM6EnKdGmT7dnuUx4k/pMBUwLKL22m/7cJvSJ4d4fWYhK5VijHa9jO/gbU+HJzJOvSOibLaW6bELIHp2Zhy4jyMhL72lGtEmuoZwCFyN9ucP0mVbATHYbE6TDWExF7XMjcsvFJmjouCYUwzDkJnKVaG8BU232kSyDFFwdiD04SwuWU+JA+gH+ZBhsURYDTy35y3+KQG7Enw//ACb0PgqGGUb8vGX6VQDYfWCxXao2w0qOA/cmSpU3su4HPqeZgGLNTvt3QB/3Fbk+UWKpdw8fMrcegiotdr3sJLUF2A3t1vMYpZXWspWwBB4C+467y+2hl35yrUoaCWBuPGVDUPvJ9UPPymMdxGVJfXbxF95HV0Wtttw2kiY7bbc81I3kNbEbe5Y/pMDwoFQrXAtxlkSpXYnjtJMNUJHlIcs/oyJbRSSMYTnwJyKKKYxgsy+NU+dvuMUWZfGqfO33GKemcZ6LFFHKs5ToBHaPLzWokL7yd9fpxnm+bYS6iqg24OOYPjPYdHSZTtBkDjXUoC+od9OR6kTp4OTr4yPLHZeHnlJ9Q35bRU13vIqisjEEFTfcEcJJQnYzlT/CKq/ePKEcHiRtcwZiPeMVNrQ1KaBNNM1uErjrNBlmIXYE+sweGxUNYHG8OBnLUYdcXpvkCsbXRbC94t99wRfbxgTLMeAw1HbgbCGVroxGkWXnveTLE6IzDvNYbXUcPMyRaoG3L9SOQHnKmIqX2G3Lbn5yJMQFBJN7D9YGYJYe5ck+g4AQoHuD4biCMqq6gzNwAJjUzYB9LkaW91hyPQwDBWpVDoR4Sii2Xcbjn1jqLXaw3v8AreR1q/fFMch3vOYxEzg2NrkbX5+RkTtfiSPqZGDZjpNxfeR1qurlYiFCsbiHHAbxmX1buw8LyhVxXG0WQ1C1RzyC/vJ8n/IZNBOTsU5BzlpxhHThgAef5l8ap87fcYp3MvjVPnb7jFPTOQ9LiinQJzFzkZVeykk22kumB+0NcrTIXidvKFJ6E897WV1d9up3gXDjhJMye7ne+87hk2E9GfJRw17XhTxA704snzBLNzlYGUXqIvxkymW8PibGUQY5YrWjTWGiw+OG3OHMHigbG9utphqbWhTAYwqf2kLg6Y5NPQabAkFRfxg/OQxpOVG4F/7TvG4DML23hAOD9eUj9F/sBYLHfiKLUg5RzuLGwJHIzM4XNqlNirkut7FTv9RNLiMmZH9pQIHMoeflJXyahiRcg03GzAcb+I5ys1K8f0TpW/oI9n+1CAAe9YbX4wHnGfNVYpQvqYksRx8hLNDst7HcPq1Blva1riX8myVKCkmzO381uA6CL8U20N8msZZy3DJSRNLMzOutyxvv0EWNxAEdUfvbcFUJ+5gfOa2lb3iL1jvxFLF4oC80PZagRT1kWLn9BwmHwKNXqqg5n9Oc9SoUQihF4KAB9InP8Zw3G9Z1hFcWj2WRETiKnJxo5hGwGRgMy+NU+dvuMU7mXxqnzt9xinpnKemiOVYypUVRckDzgHNe0YS6puZFLSwerV1QXZgB4zA9rO0CvdKfleB80zKtUuSxt0vAehjuZ0cfH+sjycmeIgrHeF8KndW3rBWgE7m0OYRSEHjsJe3iOfjWsE5i3etxtKd4RzKiASQeEHgR5fhO18hBCZMqx1NZIBA2ZSS0MNqltMFaNwb2MJF78JGqZ0TKwWCqlNjDmGxczrvvJaFffjJOdKqsNYj3F5G538eo4wXg8Za0JI4cEg78YjRRVpYp4o7KY4VrbSlV33HMbech9rwP0PnMbS3rgvOKRdLCXGqWlepV2PDhMnjM/UN7CYHd6pG/uL+82oEE9mMPpw6f9129TC05ue3VDxOIU4yzsREiUImjJK42kZEwpgcyH8ap87fcYoszH8ar/Uf7jFPSOQmxmdvUO+w5ASktW58ZWL9JMiXhUod0Sstxb9oNrUh9IRbhK2IYD6xp8Er0Fsg1bCFkcAeXDwgw7ML9ZZNS5sP/AHHr0nLw5jgHFwIL02NoWZja17X4+UGVuJjw/MJ8i/RBgJLRNzKrR1GraM14Kq9CXsbbySlVttKyV7yVHsbyTRZUXAt5xhpkDYsKJGuNXnB1Y3ZF6jVIvv8A+GEMPjbQEcaojxmSjghmcaZWjSDGArbne8TvcW8bzPf70PyfrHjPF/KbxHxv+hv5EGqtfhI0qX2gNs3vvpjqWab+6ZnxvPoK5Fp6Fk+YJoCarEbWMLzzZK5bvcIfyntARZHNx1PETj5ON/aOiaRqooyjXVxdTePnOUGPIzJX4SIzCmBzP41X+o/3GKLM/jVf6j/cZyeicpRU2ji/6yoHj2fhLYKmTr1lZ6t77SY+crqh39ZkZlXFt0EfQe1jGYsb2vHMRp24jaU/CH6SM8rYinZt5NTGw9JzFDf0mXjDXqKhW8ikx2kJBlESY9GkzVDaQrJHO0V/Yyfh0NfjH08Vp20gjxErLOHjDgOzC9HHp/NTWF8NndJV06F87bzLaZzTEcpjq2jUVcyotfuLuegkS1MPe+gekzqzhaDp/of5P8NNUzCnyUegkBzBeCqPSAVMvYGldh05wVOIeK1/QR0njecZr+fIy6afjK7oOEgdJawGYuh47TWYTOkcbtaYYU/rG7jgZKuKaCqaPTUrKw2N51xPNUxtRNwxFuhhPA9pnUgN3hJPgpfXo3dEOZD+NU+dvuMUH47MA1R26ux9WJnJ2YculJKZtJ1QW8Y1OTdJJrBlGBCCcDLFSkOPD/zaMR9p1rmKOC8eLEGVUfl1hTFUxwIg+pTtylZawhSxjxUsABykjoSAeNxKTPwEelblD1F7fg1wbkSIAydxe+8hO1oyFY8CdKSJjJEeDDJi0yO+8nMjZJkzNDryMvFaMaFAO8YlkiCd0zabDqCHcpo84JwqbzT5QlheQ5X4dPDJN7EyN0HC0IkEyrVIB3kDoYOemF3Ej1byTEODteVme0dIRsZUbjILWkzi8Y20cVlOrbUfM/5ikVU7nzMUsQLanlykiqbSvTaTirEaHVFlW2EkIlQVRLCVL8IrQ6YqqE72lZqeoQiDcRvsNriDcC1pmK62MjVt5dzCnYm0HmdM+o4rWMmFSMLSMtFeNgNJCYwtOqYisxiZXk0qKZKjRGhlQ9xtGaZ1m2jC8JiVTOl5Cr2nC+8GG7Fug9jebfJKYZLkcZhMOpYgDnPRMqQJTFxykOY6eAjxVYJeZatjyzWF4Sz6sSQqnjx8oJWjpiRKzSlt7hIjm+8meMXrHK0YVEbjnI23ktQbSEzBKVTifOKOq0+8fM/5iliBxWjKhnNfhFpvMKQmsRJaeMIjXoSI0TG+IvyQYw+YjnCNHEA8DM9+EqooZkdVPBijBTfhYkWMnw9QydyWi/7DmIwqOOnjM5jMFpJtD2ELlS4Ryg4uFJUW43YCwkjKrDgLxZpyGpVmOYxt4ZzHBgbgbwSEnRNJo5qly8OKY8SfA4J61RaVJC7udKqLAk9N9pzGYZ6TvTqLpdCVZTYkEcRttCAgjowAxTGHM07eRCSzGOCdtFaIQBNL2cwi3DnrNPUrbWEz2QN3QeQMMOQTtOLkbdHdxYpKteiTKNWny6Q5WosmzKym1xqBFx13lKqt4JrB6nQTp6xoEv1aAI2lF0tKJ6TaI2a4M5haRd1UcyB6mRubHzhnsthi1ZWtcLuf1gp9VppWvCtjsOBUcX4Ow9GMUuZl8ap87fcZyPonUyoMcsjBkiiUIkyiIoJ2nJGbY7RR/wAPZ8XhFxGWUMJb+I2EStTvzamqcP7h6zxxaXetbfhbnfpPS83zQ4ZMnxF7BaQD+KMlMMPQ/pGp2aUZszkf9Oq/i9X8pXiB/d+kZrScvPsONhEw+V1sKvv08NrqfPUuTf8AtP6TzXs/klXEuVpgWUXd2NkQHmx5cD6TW5ZmRxOHzaux99Rp8FCkIPS0oUWNPI2ZNjUr6ahHHTe1j4bAfWZpMM050pZj2Nq6HqUalHEKg74pPd1HM25zIZZ2frYquKFBdTEaiSbKqjizHkJq/wDTvFuuYUVXg+pHHIroJ3+oEM5YooUM6ejs9N2RCOKpdjtbha59IYX6gW39MpdlOwtShjqFRcRh64p1Aai0ql3QWIJIPECZLtVg3q5piKVJSztXdVUcSbyT/TdyuZYWxIvU0mxtcFWuD1Bm37KU1/3nMqlrvTWqyX66gCf8esoTMz/9ZV76PxOFFe3wPad+/wCXhxmNzHBPRqNSqqUdDpZTxB/4nDi31+1Ln2mrXrv3tV76r9bze/6w0wa2FqkAPUwys/UkHYn1MxjAYHCvVqLTpqWdzpVRxJM26/6Z176PxOF9va/sPaHXfjp4cZmuyubfhMVSxGnWEJJUcSCCDbobGbN8twOMxP4jB484fEPU1rTroRapfVZX8/PpMzGDq5ZVWucOyN7UPo0W72onYCa5P9NMRcI2Iwq1yLjDmp/E4XA2HGGexOGxBzuoMcddenSZi1gbkBFRlsN+620G4jD5YcQ1dszxHtNZqE/hnuHDX425EWmCQdm8mqvWOEICVQWBD8AVFze3h/mGcy7PVcPSL1Hpgg20arvYmwa3TnDmX5lQxOcUq2HYsppkM2kqS6owJII6WmOzlS9esxJJNR9ybnZ2AG/Kc9TK9Zeap+IMdqBXR0GIdXb2YZdAsAh4A7DeS0eytQorValKjr3Raj2Y/TlDHaGkr4/BK3ApSuOVtRIHqJmu2uJZ8dXD/wArBFHRQosP1v8AWK4la2NN08SK2b5RUwz6KoFyLqwN1YdVP1EBYlJucwfXlFB33ZKhRCeOm5FvKw/SYt7GLSUvweW6XoHqg3AE3XZjANTCluLDUfDpBXZ7DJrLMLkcLzb0KY3PWc/Py+dS3HGPTBZr8er/AFH+4xR2afGq/wBR/uM5KkTO5ZlDV1ZlrUl0bstR2QqCwUMWK6QLsOLS5jOzNemjuXplVXWArksyAIWdAQNh7RL3sd+EG4HMKlNdKhdOtKhDKCGZL6Va/vKLk6TteX8V2lr1EdGCBX1aiqDV3ipcKxuQGKJf5RO9nEtIqGU4hnVGVqepWcNUuiaEXU73tuoHQGE37I4katT0l03ZtVT3UBce1ay+4SjWI324QYM8xHtKdQuzNS2pki2lbW0DTbu+HDj1Mvf/AC7FEHUyPq1a9VNSXVi5KOSN0u7HT4xcQ2snz3HOwp4aozM2GU0yC2pAQFHcN/dIHhymjftsDlow1m9vp9kXsLeyB/NxvbaYOpi2qVHqObu5LMbAC56AcB4R4cdR6iI/GOkmjUZBntOjhcXQcOXrqAmkXUWW3eN9o7s12gSnSfC4lC+Gq7sF99G/OnoPSZZWHUeokntB1HrF7MfqjbYTOMBg9VTBrVq12Uqr1QFVA3E7cTwgHsz2mOFrVDWU1aNdSlZebBie+L7E94+sEK46j1EjxCA73HqIVTA5RrsrzbJ8HXTEUFxNRw2wqABaSm92UH3mA2EB0+1ho5lUxtAFkeo50vtqR+Kt0PD0gGrQHIj1lcpvaUT0k5w334vJDV/EaMTq1a/w1ho1XvbV+W/K9plu1mfPjcQ1dwFFgqIDcKi+6o8evjBAHgZwr4QgCnZnOThMQlcIrhbhlbgytsRvwM1wxmSe1GJAxQbV7T2AA0awdVg3S/jPPCpvwMQU9DCY1lfttVOY/wC4KoVrgBL7FANJRjzuOfWFsVislrucQ64qm7nW9BANBY7tZuQJ8Z5/bwMnwo728VvApaz0DIc7pU8eMQKPsqNiBTQXI7mkHxJ5ypiawd3ccHd2F+NmYkX9YMpV0AA1D1EcmJX8y+onNTpnVMyvTS9ps8StVpVKWtSiItyLHUjE3G8t43M8BiyKuIWrSrAAP7IBle3PwMxr10/MPWNGIX8w9RN2r+gdJ/GaDtFny1lp0KCFKFIWRSe8x/O3j/yYBduUiLr+YeokFWsL3DD1Ez1saclYgplNUrVA5Nsf2m+wr3WYTs3TRn1u6BU37zqLnla5mzw2NpAfFp/3p/zOPnlt+I6IpZ9mNzT41X+o/wBxikeZYqn7ap/ET325j8x8Yp14zm8P/9k=" width = 500px>
    <iframe width="800" height="600" src="https://www.youtube.com/embed/NATSpYWERIE?si=di3k-Rpg_hAz3SXY&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
</body>
</html>