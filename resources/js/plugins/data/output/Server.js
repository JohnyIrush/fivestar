class Server
{
    getData(url)
    {
        var array = [];

        axios.get(url)
        .then((response)=>{
           array = response.data
        })

        return array;
    }
}


export {Server};
