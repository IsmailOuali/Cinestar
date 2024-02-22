async function fetchData() {
    const url = 'https://ajayakv-rest-countries-v1.p.rapidapi.com/rest/v1/all';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'f74ca324e8msh580531512558574p142c6fjsn1de38eb9c350',
            'X-RapidAPI-Host': 'ajayakv-rest-countries-v1.p.rapidapi.com'
        }
    };

    try {
        const response = await fetch(url, options);
        const result = await response.text();
        console.log(result);
    } catch (error) {
        console.error(error);
    }
}

fetchData();
