const busqueda = async () => {
    let buscar = document.forms['form']['buscar'].value;
    let orden = document.forms['form']['orden'].value;
    let escrito = document.forms['form']['escrito'].value;
    let token = document.forms['form']['_token'].value;
    let categoria = document.forms['form']['categoria'].value;
    let tmp;
    await fetch('/productos/buscar?categoria=&escrito=' + escrito + '&buscar=' + buscar + '&orden=' + orden + '&_token=' + token + '&categoria=' + categoria, { 'method': 'post' }).then(async (response) => { tmp = response });
    tmp = await tmp.json();
    let producto = document.getElementsByClassName('producto');
    let e = document.getElementById('vacio');
        if (e) {
            e.remove();
        }
    if (tmp.productos.length == 0) {
        let vacio = document.createElement('h3');
        vacio.setAttribute('id', 'vacio');
        vacio.innerHTML = 'No hay productos que coincidan con la búsqueda';
        document.getElementsByTagName('main')[0].appendChild(vacio);
    }
    while (producto.length) producto[0].remove();

    for (let i = 0; i < tmp.productos.length; i++) {
        let div = document.createElement('div');
        div.setAttribute('class', 'producto');
        let img = document.createElement('img');
        img.setAttribute('src', '../../../../../assets/img/productos/' + tmp.productos[i].nombre + '.png');
        let h = document.createElement('h3');
        h.innerHTML = tmp.productos[i].nombre;
        let h2 = document.createElement('h3');
        let moneda;
        if (tmp.productos[i].moneda == 'euro') {
            moneda = '€';
        } else if (tmp.productos[i].moneda == 'dolar') {
            moneda = '$';
        }
        let disponible = document.createElement('h4');
        if (!tmp.productos[i].disponible) {
            disponible.innerHTML = 'No disponible';
        }
        h2.innerHTML = tmp.productos[i].precio + ' ' + moneda;
        let f = document.createElement('form');
        let ruta = route('productos.show', { id: tmp.productos[i].id });
        f.setAttribute('action', ruta);
        f.setAttribute('method', 'get');
        let inp = document.createElement('input');
        inp.setAttribute('type', 'submit');
        inp.setAttribute('value', 'Ver Detalles');

        f.appendChild(inp);
        div.appendChild(img);
        div.appendChild(h);
        div.appendChild(h2);
        div.appendChild(disponible);
        div.appendChild(f);
        document.getElementsByTagName('main')[0].appendChild(div);
    }
};
