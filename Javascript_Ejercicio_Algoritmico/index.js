const fs = require('fs');

function filtroUrl(nombreArchivo) {
    const unicas = new Set(); 

    
    const patronDominio = /https?:\/\/(?:www\.)?([^\s/]+)/;
    const patronExtension = /\.html$/;

    // Leer el archivo
    fs.readFile(nombreArchivo, 'utf8', (err, data) => {
        if (err) {
            console.log(`Error al leer el archivo: ${err}`); 
            return;
        }


        const lineas = data.split('\n').map(linea => linea.trim()).filter(linea => linea); 

       
        lineas.forEach(linea => {
            const url = linea.trim(); 
            const coincidenciaDominio = url.match(patronDominio); 
            
            if (coincidenciaDominio) {
                const dominio = coincidenciaDominio[1]; 
        
                if (dominio.includes('shop') && patronExtension.test(url)) {
                    unicas.add(url); 
                }
            }
        });

  
        const filtradas = Array.from(unicas);
        const total = filtradas.length; 

   
        console.log("URLs filtradas:");
        filtradas.forEach(url => console.log(url)); 
        console.log(`\nEl número total de URLs que cumplen los requisitos: ${total}`);
    });
}


const archivo = 'urls.txt';
filtroUrl(archivo); 
