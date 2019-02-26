<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Bar chart with D3.js</title>
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="https://d3js.org/d3.v5.min.js"></script>

  <style>
	.bar {
	  fill: steelblue;
	}

	.bar:hover {
	  fill: brown;
	}
</style>

</head>

<body>
  <div id='layout'>
    <!-- <h2>Bar chart example</h2> -->
    <div id='container'>
        <svg width="960" height="500"></svg>
    </div>
  </div>

  <script>

var svg = d3.select("svg"),
margin = {
	top: 20,
	right: 20,
	bottom: 30,
	left: 50
},
width = +svg.attr("width") - margin.left - margin.right,
height = +svg.attr("height") - margin.top - margin.bottom,
g = svg.append("g").attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var parseTime = d3.timeParse("%d-%b-%y");

var x = d3.scaleBand()
	.rangeRound([0, width])
	.padding(0.1);

var y = d3.scaleLinear()
	.rangeRound([height, 0]);

    const data = [
      {
        ordinal: 1,
        value: 0
      },
      {
        ordinal: 2,
        value: 1
      },
      {
        ordinal: 3,
        value: 1
      },
      {
        ordinal: 4,
        value: 2
      },
      {
        ordinal: 5,
        value: 3
      },
      {
        ordinal: 6,
        value: 5
      },
      {
        ordinal: 7,
        value: 8
      },
      {
        ordinal: 8,
        value: 13
      },
      {
        ordinal: 9,
        value: 21
      },
      {
        ordinal: 10,
        value: 34
      },
      {
        ordinal: 11,
        value: 55
      }];

	g.append("g")
	.attr("transform", "translate(0," + height + ")")
	.call(d3.axisBottom(x))

	g.append("g")
	.call(d3.axisLeft(y))
	.append("text")
	.attr("fill", "#000")
	.attr("transform", "rotate(-90)")
	.attr("y", 6)
	.attr("dy", "0.71em")
	.attr("text-anchor", "end")
	.text("Speed");

	g.selectAll(".bar")
	.data(data)
	.enter().append("rect")
	.attr("class", "bar")
	.attr("x", function (d) {
		return x(d.ordinal);
	})
	.attr("y", function (d) {
		return y(Number(d.value));
	})
	.attr("width", 5)//x.bandwidth())
	.attr("height", function (d) {
		return height - y(Number(d.value));
	});

</script>

</body>



</html>