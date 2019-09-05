let team_row = document.querySelector(".team-row")

const displayProfile = (data) => {
  data.forEach(member => {

    let team_column = document.createElement("div")
    let unhover_img = document.createElement("div")
    let img = document.createElement("img")
    let name = document.createElement("strong");
    let name_span = document.createElement("span")
    let message = document.createElement("h4")
    let message_span = document.createElement("span")
    let ul = document.createElement("ul")
    let li = document.createElement("li")
    let resume = document.createElement("a")
    let i = document.createElement("i")


    team_column.className = "team_column"
    unhover_img.className = "unhover_img"
    img.src = member.cloudinary

    unhover_img.appendChild(img)
    team_column.appendChild(unhover_img)

    name.textContent = member.name;
    name_span.className = "team"
    name_span.appendChild(name);
    team_column.appendChild(name_span);

    message_span.textContent = member.message
    message_span.className = "team"
    message.appendChild(message_span)
    team_column.appendChild(message)

    i.className = "fa fa-link"
    i.textContent = "Check out my CV"
    resume.appendChild(i)
    resume.href = member.resume
    li.appendChild(resume)
    ul.appendChild(li)

    team_column.appendChild(ul)
    team_row.appendChild(team_column)
  })
}

displayProfile(data);
// Form validation
