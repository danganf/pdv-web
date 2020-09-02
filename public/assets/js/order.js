let elemSearch = document.querySelector('#search');

class Order{
    init(){
        console.log('INIT');
        elemSearch.focus();
        elemSearch.addEventListener('keyup', (e) =>{
            if (e.key === 'Enter') {
                if(elemSearch.value.length > 0){
                    this.search();                    
                }
              }
        })
    }
    search(){
        let spinner = document.querySelector('.spinner');
        let elementList = document.querySelector('[data-list-prod]')            
                
        spinner.style.display='inline-block';
        elementList.innerHTML = '';

        const result = fetch('/api/catalog/');
        result.then((resolve) => {
            if( resolve.status === 200 ){                
                return resolve.json();
            } else {
                reject(resolve.json());
            }
        })
        .then((data) => {
            spinner.style.display='none';  
            data.forEach(row => {
                let html = `<p class="list-prod">
                    <span class="name">${row.name}</span>
                    <span class="desc">Refer: ${row.sku} - <span class="price badge badge-secondary">R$ ${row.price}</span></span>
                </p>`;                
                elementList.innerHTML += html;
            });          
        })
        .catch( (reject) => {
            console.log(reject);
        } );
    }
}