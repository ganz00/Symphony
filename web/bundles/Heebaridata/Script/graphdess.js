
/* 
 Created on : 17 août 2016, 11:48:04
 Author     : Landry Kateu <landrykateu@gmail.com>
 */
function dessine(json,x,y,id,type) {
    json =  getJSonObject(json);
    if(type == 'L' )
        new Morris.Line({
                                element: id,
                                data: json,
                                xkey: x,
                                ykeys: [y],
                                labels: [y]
                              });
    if(type == 'D' )                          
       new  Morris.Donut({
                     element: id,
                     data: [
                            {label: "Download Sales", value: 12},
                            {label: "In-Store Sales", value: 30},
                            {label: "Mail-Order Sales", value: 20}
                          ]
                  });
        
}
function getJSonObject(value) {
           var b = value.replace(/&quot;/ig, '"')
            return $.parseJSON(b);
        }


