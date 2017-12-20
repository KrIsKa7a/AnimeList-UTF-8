package animelist.entity;

import javax.persistence.*;

@Entity
@Table(name = "animes")
public class Anime {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;

    @Column(nullable = false)
    private int rating;

    @Column(nullable = false)
    private String Name;

    @Column(nullable = false)
    private String description;

    @Column(nullable = false)
    private String watched;

    public Anime() {
    }

    public Anime(int rating, String Name, String description, String watched) {
        this.rating = rating;
        this.Name = Name;
        this.description = description;
        this.watched = watched;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
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
