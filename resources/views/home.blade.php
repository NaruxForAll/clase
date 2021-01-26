<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Base</title>
    <link rel="stylesheet" type="text/css" href="/css/home.css" media="screen" />
</head>
<body>
    <div id="primary">
    <header>
        <div><h1>Formulario Base</h1></div>
    </header>
    <main>
        <form action="" method="get">
            <input id="title1" type="text" placeholder="Texto de prueba"> 
            <input id="title2" type="text" placeholder="Texto de prueba"> 
            <input id="title3" type="text" placeholder="Texto de prueba"> 
        </form>
        <div id="son">
        <button id="send">Enviar</button>
        <div>
    </main>
    <footer>
        <table>
            <thead>
                <th>Columna 1</th>
                <th>Columna 2</th>
                <th>Columna 3</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody id="data">
                <tr>
                    <td>Dato C1</td>
                    <td>Dato C2</td>
                    <td>Dato C3</td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="#2553F0"/><path d="M8 17c0-.55-.45-1-1-1s-1 .45-1 1c0 .74-.19 1.4-.5 1.95.17.03.33.05.5.05 1.1 0 2-.9 2-2z" opacity=".3"/><path d="M11.75 15l8.96-8.96c.39-.39.39-1.02 0-1.41l-1.34-1.34c-.2-.2-.45-.29-.7-.29s-.51.1-.71.29L9 12.25 11.75 15zM6 21c2.21 0 4-1.79 4-4 0-1.66-1.34-3-3-3s-3 1.34-3 3c0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2zm0-4c0-.55.45-1 1-1s1 .45 1 1c0 1.1-.9 2-2 2-.17 0-.33-.02-.5-.05.31-.55.5-1.21.5-1.95z"/></svg></td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="#CB2E2E"/><circle cx="14" cy="6" r="1"/><path d="M13.8 11.48l.2.02c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5l.02.2c.09.67.61 1.19 1.28 1.28zM14 3.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5zm-4 0c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z"/><circle cx="18" cy="10" r="1"/><circle cx="18" cy="6" r="1"/><path d="M21 10.5c.28 0 .5-.22.5-.5s-.22-.5-.5-.5-.5.22-.5.5.22.5.5.5z"/><circle cx="10" cy="6" r="1"/><circle cx="18" cy="14" r="1"/><circle cx="6" cy="18" r="1"/><path d="M14 20.5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm7-7c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm-18 0c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5z"/><circle cx="10" cy="18" r="1"/><path d="M3 9.5c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5zm7 11c-.28 0-.5.22-.5.5s.22.5.5.5.5-.22.5-.5-.22-.5-.5-.5z"/><circle cx="6" cy="14" r="1"/><path d="M2.5 5.27L6 8.77l.28.28L6 9c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1c0-.1-.03-.19-.06-.28l2.81 2.81c-.71.11-1.25.73-1.25 1.47 0 .83.67 1.5 1.5 1.5.74 0 1.36-.54 1.47-1.25l2.81 2.81c-.09-.03-.18-.06-.28-.06-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1c0-.1-.03-.19-.06-.28l3.78 3.78h.01l1.41-1.41L3.91 3.86 2.5 5.27z"/></svg></td>
                </tr>
            </tbody>
        </table>
        @include('/components/foot-menu')
    </footer>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>