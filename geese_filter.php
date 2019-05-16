<!DOCTYPE html>
<html>
	<head>
	<title>Geese filter in Javascript,PHP and C#</title>

	</head>
    <body>
/* write a function that takes an array of strings as an argument and returns a filtered array containing the same elements but
 with the "geese" removed .The geese are any string in the following array, which is pre-populated in your solution
geese = ['African','Roman Tufted','Toulouse','Pilgrim','Steinbacher'];
The Elements in the returned array should be in the same order as in the initial array passed to your function , albeit with the geese removed.
 Note that all of the strings will be in the same case as those provided and some elements may be repeated.
 */
        <?php
        //SOLUTION IN PHP
            function gooseFilter($array){
                $geese =  ['African','Roman Tufted','Toulouse','Pilgrim','Steinbacher'];
                $arr_to_filter = $array;
                $filterred_array_of_geese = [];
                $arr_length = count($array);
                $geese_to_remove_arr_length = count($geese); 
                $index_i;
                $index_j;
            
                for($index_i = 0; $index_i < $arr_length;$index_i++){
                    for($index_j = 0; $index_j < $geese_to_remove_arr_length;$index_j++){
                        if(isset($arr_to_filter[$index_i])){
                        if($arr_to_filter[$index_i] == $geese[$index_j]){
                            array_splice($arr_to_filter,$index_i,1);
                              --$index_i;
                              --$index_j;
                          }
                      }
                    }
                }
                print_r($arr_to_filter);
                return $arr_to_filter;
            }
            gooseFilter(['Goose','Gander','Pilgrim','African','Grey Goose','Steinbacher','Australian','Roman Tufted']);
            
        ?>

<script>
    //SOLUTION IN JAVASCRIPT
     function  gooseFilter(array){
	var geese = ['African','Roman Tufted','Toulouse','Pilgrim','Steinbacher'];
	var arrToFilter = array;
	var filteredArrayOfGeese = [];
	var arrToFilterLength = array.length;
	var geeseToRemoveArrayLength = geese.length;
	var i,j;
	
	for(i = 0;i < arrToFilterLength;i++){
		for(j = 0;j < geeseToRemoveArrayLength;j++){
			if(arrToFilter[i] == geese[j]){	
				arrToFilter.splice(i,1); 
				--i;
				--j;
			} 
		}
	}  
	console.log(array);
	return array;
}
gooseFilter(['Goose','Gander','Pilgrim','Steinbacher','Australian','Roman Tufted','Roman Tufted']);

/*
SOLUTION IN C#
namespace geese_filter
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] filter = { "Goose", "Steinbacher", "Gander", "Pilgrim", "Roman Tufted", "Duck" };
            
            var answer = GooseFilter(filter);
            Console.WriteLine(answer);
        }

        static string GooseFilter(string[] filter)
        {
            var FilteredResults = filter.ToList();

            string[] geese = { "African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher" };
            int i, j;
            
            

            for ( i = 0; i < filter.Length;i++ )
            {
                for (j = 0; j < geese.Length;j++ )
                {
                    if(filter[i] == geese[j])
                    {
                        FilteredResults.Remove(filter[i]);
                    }
                }
            }
            return string.Join(" ", FilteredResults.ToArray());
        }
    }
}
*/
</script>
    </body>
</html>
