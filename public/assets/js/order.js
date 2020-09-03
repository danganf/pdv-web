const elemSearch = document.querySelector('#search');
const elemList = document.querySelector('[data-list-prod]');
let dataCart = [];
let lastSearch = '';

class Order{
    init(){        
        elemSearch.focus();
        elemSearch.addEventListener('keyup', (e) =>{
            if (e.key === 'Enter') {            
                if(elemSearch.value.length > 0){
                    this.search( elemSearch.value );                    
                } else {
                    elemList.innerHTML = '';
                }
            }
        })
    }
    search( value ){
        if( lastSearch !== value ){            
            let spinner = document.querySelector('.spinner');                    
            spinner.style.display='inline-block';
            elemList.innerHTML = '';

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
                    let html = `<p class="list-prod" data-refer="${row.sku}" data-price="${row.price}" data-providers="${row.providers.map(a => a.name).join(',')}">
                        <span class="name">${row.name}</span>
                        <span class="desc">Refer: ${row.sku} - <span class="price badge badge-secondary">R$ ${row.price}</span></span>
                    </p>`;                
                    elemList.innerHTML += html;
                });
                lastSearch = value;
                this.selectProduct();
            })
            .catch( (reject) => {
                console.log(reject);
            } );
        }        
    }
    selectProduct(){
        let elements = document.querySelectorAll('[data-refer]')
        if( elements.length > 0 ){            
            const listener = event => {
                const item = {
                    sku: null,
                    name: null,
                    price: null,
                    providers: null,
                    qty: 1,
                }
                const parent = event.target.parentElement;
                item.sku = parent.getAttribute('data-refer');
                item.price = parent.getAttribute('data-price');
                item.providers = parent.getAttribute('data-providers');
                item.name = parent.querySelector('span.name').innerText;
                this.addCart( item );
            };

            elements.forEach( row => {
                row.removeEventListener('click', listener, false);
                row.addEventListener('click', listener);
            } );
        }
    }
    addCart( objItem ){        
        const elemItems = document.querySelector('[data-items]');    
        let qty = +objItem.qty;                
        if( !dataCart.includes( objItem.sku ) ){
            let htmlProviders = '';
            if( objItem.providers.length > 0 ){
                objItem.providers.split(',').forEach( provider => {
                    htmlProviders += `<p class="list-provider">${provider}</p>`
                } )
            }

            elemItems.innerHTML += `<tr data-item="${objItem.sku}">
                <td>
                    <span data-qty>${qty}</span>x ${objItem.name}
                </td>
                <td>R$ <span data-price>${objItem.price}</td>
                <td>${htmlProviders}</td>
            </tr>`;
            dataCart.push( objItem.sku );
        } else {
            let elem = document.querySelector('[data-item="'+objItem.sku+'"] span[data-qty]')
            elem.innerHTML = (+elem.innerHTML) + 1;
        }

        this.updtTotalOrder();
        
    }
    updtTotalOrder(){
        // ATUALIZANDO VALOR TOTAL DA COMPRA
        let total = 0;
        document.querySelectorAll('tr[data-item]').forEach( row => {
            let qty = +row.querySelector('span[data-qty]').innerHTML;
            let price = +row.querySelector('span[data-price]').innerHTML;
            total += (price * qty);
        } );
        if(total > 0){
            this.initModal();
        }
        document.querySelector('[data-total]').innerHTML = total.toFixed(2)
    }
    initModal(){
        const elemBtn = document.querySelector('[data-btn]');
        elemBtn.style.display = 'block';
    }
}