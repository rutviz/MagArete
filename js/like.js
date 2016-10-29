function like(int article_no)
{
	int no = article_no;
	int x=1;
	$.post('like.php',{no:no,x:x},function(data){
		$("#like").html("Views : "+data);
	});
}
function getlike(int article_no)
{
	int no = article_no;
	int x=0;
	alert("getting likes");
	$.post('like.php',{no:no,x,x},function(data){
		$("#like").html("Views : "+data);
	});
}
