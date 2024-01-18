BX.ready(function() {
    document.querySelectorAll('.star').forEach(function(star) {
        BX.bind(star, "click", clickStar);
    });
});

function clickStar(event) {
    event.preventDefault();
    var agentID = event.currentTarget.getAttribute('data-agent-id');
    var target = this;
    if (agentID) {
        BX.ajax.runComponentAction("mcart:agents.list", "clickStar", {
            mode: "class",
            data: { agentID: agentID }
        })
            .then(function(response) {
                if (response.data && response.data.action === 'success') {
                    target.classList.toggle('active');
                }
            })
            .catch(function(response) {
                console.error(response.errors);
            });
    }
}