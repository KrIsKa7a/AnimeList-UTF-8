package animelist.bindingModel;

import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;

public class AnimeBindingModel {
    @NotNull
    private int rating;

    @NotNull
    @Size(min = 1)
    private String Name;

    @NotNull
    @Size(min = 1)
    private String description;

    @NotNull
    @Size(min = 1)
    private String watched;

    public AnimeBindingModel() {
    }

    public AnimeBindingModel(int rating, String Name, String description, String watched) {
        this.rating = rating;
        this.Name = Name;
        this.description = description;
        this.watched = watched;
    }

    public int getRating() {
        return rating;
    }

    public void setRating(int rating) {
        this.rating = rating;
    }

    public String getName() {
        return Name;
    }

    public void setName(String Name) {
        this.Name = Name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getWatched() {
        return watched;
    }

    public void setWatched(String watched) {
        this.watched = watched;
    }
}
